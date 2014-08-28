<?php
  require_once('Header.php');
  $product = 'AVPN';
  $filename = 'catalog_AVPN.json';

  function cacheExpired() {
    global $filename;

    // If the file is older than 2 weeks we need to refresh
    if (time() - filemtime($filename) > 2 * 7 * 24 * 3600) {
      return true;
    } else {
      return false;
    }
  }

  function getCache() {
    global $filename;

    return file_get_contents($filename);
  }

  function writeToCache($json) {
    global $filename;

    return file_put_contents($filename, $json);
  }

  /**
   * Create an request with the minimum required data
   *
   * @return InquireNetworkProductCatalogRequestInfo
   */
  function createRequest() {
    global $filename, $product;

    if (isset($_GET['product'])) {
      $product = $_GET['product'];
      $filename = 'catalog_'.$product.'.json';
    }
    $additionalNotes = GET('additionalNotes');

    return new InquireNetworkProductCatalogRequestInfo($product, $additionalNotes);
  }

  // Create a request  
  $request = createRequest();

  // Ship it, turn trace on so we can see exceptions
  $client = new CingularWirelessCSIService(array('trace' => 1)); 
  $client->__setSoapHeaders(createHeader());

  // If there's an error, let's dump the xml and review
  try {
    if (cacheExpired()) {
      $response = $client->InquireNetworkProductCatalog($request);
      writeToCache(json_encode($response));
    }

    echo getCache();
  } catch (Exception $e) {
    //echo '******* LAST REQ *********' . PHP_EOL;
    //var_dump($client->__getLastRequest());
    //echo '******* LAST RSP *********' . PHP_EOL;
    echo $client->__getLastResponse();
    echo $e->getMessage() . PHP_EOL;
  }
?>
