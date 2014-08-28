<?php
  require_once('Header.php');

  /**
   * Create request with the minimum required data
   *
   * @return InquireNetworkProductPriceQuoteRequestInfo
   */
  function createRequest() {

    $speedDetails = new SpeedInfo(
      GET('speedName', '7xT1 (10.808 Mbps)'),
      GET('speedPhysicalValue', '10.808'),
      GET('speedUnit', 'Mbps')
    );

    $productTypeDetails = new SpeedProductTypeInfo(
      null,
      null
    );

    $networkSpeedDetails = new NetworkTransportSpeedInfo(
      GET('networkTransportSpeedType', 'T1'),
      GET('productType', 'AVPN')
    );

    $siteSelectionDetails = new SiteSelectionDetails(
      $speedDetails,
      null,//$productTypeDetails,
      $networkSpeedDetails
    );
    $siteSelectionDetails->managementOptionIndicator = GET('managementOptionIndicator', false);

    $networkSitePriceRequestDetails = new NetworkSitePriceRequestDetails(
      GET('popClli'),
      GET('swcClli'),
      GET('lecName'),
      GET('mileage', 0),
      GET('commitmentTerm', 'ONEYR'),
      $siteSelectionDetails,
      GET('region', 'INREGION'),
      GET('interfaceType')
    );
    return new InquireNetworkProductPriceQuoteRequestInfo($networkSitePriceRequestDetails);
  }

  // Create a request  
  $request = createRequest();

  // Ship it, turn trace on so we can see exceptions
  $client = new CingularWirelessCSIService(array('trace' => 1)); 
  $client->__setSoapHeaders(createHeader());

  // If there's an error, let's dump the xml and review
  try {
    //echo json_encode($request);
    $response = $client->InquireNetworkProductPriceQuote($request);
    echo json_encode($response);
  } catch (Exception $e) {
    //echo '******* LAST REQ *********' . PHP_EOL;
    //var_dump($client->__getLastRequest());
    //echo '******* LAST RSP *********' . PHP_EOL;
    echo $client->__getLastResponse();
    echo $e->getMessage() . PHP_EOL;
  }

?>
