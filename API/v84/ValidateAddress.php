<?php
  require_once('Header.php');

  /**
   * Create an address with the minimum required data
   *
   * @param string $street
   * @param string $city
   * @param string $state
   * @param string $zipCode
   * @return AddressMatchInfo
   */
  function createAddress($street, $city, $state, $zipCode) {

    // zip+4 (we can find an address without it)
    $zipCodeExtension = null;
    $zipGeoCode = null;

    $Zip = new AddressZipInfo($zipCode, $zipCodeExtension, $zipGeoCode);

    // these aren't necessary to find an address
    $county = null;
    $urbanization = null;
    $Country = null;

    $Address = new AddressMatchInfo($street, $city, $county, $urbanization, $state, $Zip, $Country);

    return $Address;
  }

  /**
   * Create an request with the minimum required data
   *
   * @return ValidateAddressServiceAvailabilityRequestInfo
   */
  function createRequest() {
    
    /*
       Mode B so we can validate the address as well as check service availability,
       change to Mode A to only validate the address
     */
    $mode = GET('mode', 'B');

    // Return near matches 
    $nearMatchIndicator = GET('nearMatchIndicator', 'true');

    // Return all the available speeds for the serving wire center
    $displayAllSpeeds = GET('displayAllSpeeds', 'true');

    $street = GET('street', '2900 W Plano Pkwy');
    $city = GET('city', 'Plano');
    $state = GET('state', 'TX');
    $zipCode = GET('zipCode', '75075');

    $Address = createAddress($street, $city, $state, $zipCode); 

    // Leaving the speed null, let's just see if ethernet is available at this address
    $transportType = GET('transportType', 'Ethernet');
    $speedName = GET('speedName');
    $speedPhysicalValue = GET('speedPhysicalValue'); 
    $speedUnit = GET('speedUnit');

    $Speed = new SpeedInfo($speedName, $speedPhysicalValue, $speedUnit);
    $quantity = GET('quantity', 1);

    $ServiceAvailability = new NetworkServiceAvailability($transportType, $Speed, $quantity);
    $addressDetails = new AddressDetails($Address, $ServiceAvailability);

    return new ValidateAddressServiceAvailabilityRequestInfo($mode, $nearMatchIndicator, $displayAllSpeeds, $addressDetails);
  }

  // Create a request  
  $request = createRequest();

  // Ship it, turn trace on so we can see exceptions
  $client = new CingularWirelessCSIService(array('trace' => 1)); 
  $client->__setSoapHeaders(createHeader());

  // If there's an error, let's dump the xml and review
  try {
    $response = $client->ValidateAddressServiceAvailability($request);
    echo json_encode($response);
  } catch (Exception $e) {
    //echo '******* LAST REQ *********' . PHP_EOL;
    //var_dump($client->__getLastRequest());
    //echo '******* LAST RSP *********' . PHP_EOL;
    //var_dump($client->__getLastResponse());
    echo $client->__getLastResponse();
    //echo json_encode($client->__getLastResponse());
    echo $e->getMessage() . PHP_EOL;
  }
?>
