<?php

include_once('AddressGeocodeCoordinatesInfo.php');
include_once('AddressMatchInfo.php');
include_once('AddressZipInfo.php');
include_once('IpvInfo.php');
include_once('IpvLanInfo.php');
include_once('ItemPriceInfo.php');
include_once('MessageHeaderSecurity.php');
include_once('MessageHeaderSequence.php');
include_once('MessageHeaderTracking.php');
include_once('NetworkAccessSpeedInfo.php');
include_once('NetworkServiceAvailability.php');
include_once('NetworkTransportSpeedInfo.php');
include_once('ResponseInfo.php');
include_once('SpeedInfo.php');
include_once('SpeedProductTypeInfo.php');
include_once('MessageHeaderInfo.php');
include_once('ResultStatusInfo.php');
include_once('ServiceProviderEntityInfo.php');
include_once('ServiceProviderRawError.php');
include_once('BISError.php');
include_once('ServiceEntityFaultInfo.php');
include_once('CSIApplicationException.php');
include_once('CancelProvisioningOrderRequestInfo.php');
include_once('CancelProvisioningOrderResponseInfo.php');
include_once('EchoRequestInfo.php');
include_once('EchoResponseInfo.php');
include_once('InquireASRStatusRequestInfo.php');
include_once('InquireASRStatusResponseInfo.php');
include_once('InquireNetworkProductCatalogRequestInfo.php');
include_once('InquireNetworkProductCatalogResponseInfo.php');
include_once('AvailableTransportSpeedsDetails.php');
include_once('LinkedAccessSpeedDetails.php');
include_once('AvailableASEPortSpeeds.php');
include_once('SupportedCirSpeedXrefs.php');
include_once('AvailableASECirSpeeds.php');
include_once('SupportedCosList.php');
include_once('InquireNetworkProductPriceQuoteRequestInfo.php');
include_once('NetworkSitePriceRequestDetails.php');
include_once('SiteSelectionDetails.php');
include_once('SelectedAccessSpeed.php');
include_once('InquireNetworkProductPriceQuoteResponseInfo.php');
include_once('InquireNetworkProductRateCardRequestInfo.php');
include_once('InquireNetworkProductRateCardResponseInfo.php');
include_once('NetworkRateCardDetails.php');
include_once('AccessPriceDetails.php');
include_once('AseRateCardDetails.php');
include_once('asePortSpeedPriceDetails.php');
include_once('aseCirSpeedPriceDetails.php');
include_once('SubmitWirelineProvisioningOrderRequestInfo.php');
include_once('SiteInformationDetails.php');
include_once('ProvisionalSiteDetails.php');
include_once('AddressDetails.php');
include_once('NetworkSpeedDetails.php');
include_once('SelectedAccessSpeedDetails.php');
include_once('NetworkSitePriceRequest.php');
include_once('RdsInformationDetails.php');
include_once('InstallationDetails.php');
include_once('ContactDetails.php');
include_once('AccessFeaturesOptions.php');
include_once('TotalServiceDetails.php');
include_once('AVPNPortDetails.php');
include_once('LogicalChannelInformation.php');
include_once('PortDetails.php');
include_once('UnmanagedRouterEquipmentDetails.php');
include_once('AttRouterShipDetails.php');
include_once('ClassOfServiceDetails.php');
include_once('EndCustomerDetails.php');
include_once('SubmitWirelineProvisioningOrderResponseInfo.php');
include_once('OrderProvisioningSitePriceDetails.php');
include_once('ValidateAddressServiceAvailabilityRequestInfo.php');
include_once('ValidateAddressServiceAvailabilityResponseInfo.php');
include_once('AddressServiceAvailability.php');
include_once('ServiceAvailabilityDetails.php');
include_once('Ethernet.php');
include_once('Service.php');
include_once('OtherSpeed.php');
include_once('ExistingConnectivity.php');
include_once('PrivateLine.php');


/**
 * 
 */
class CingularWirelessCSIService extends \SoapClient
{

  /**
   * 
   * @var array $classmap The defined classes
   * @access private
   */
  private static $classmap = array(
    'AddressGeocodeCoordinatesInfo' => '\AddressGeocodeCoordinatesInfo',
    'AddressMatchInfo' => '\AddressMatchInfo',
    'AddressZipInfo' => '\AddressZipInfo',
    'IpvInfo' => '\IpvInfo',
    'IpvLanInfo' => '\IpvLanInfo',
    'ItemPriceInfo' => '\ItemPriceInfo',
    'MessageHeaderSecurity' => '\MessageHeaderSecurity',
    'MessageHeaderSequence' => '\MessageHeaderSequence',
    'MessageHeaderTracking' => '\MessageHeaderTracking',
    'NetworkAccessSpeedInfo' => '\NetworkAccessSpeedInfo',
    'NetworkServiceAvailability' => '\NetworkServiceAvailability',
    'NetworkTransportSpeedInfo' => '\NetworkTransportSpeedInfo',
    'ResponseInfo' => '\ResponseInfo',
    'SpeedInfo' => '\SpeedInfo',
    'SpeedProductTypeInfo' => '\SpeedProductTypeInfo',
    'MessageHeaderInfo' => '\MessageHeaderInfo',
    'ResultStatusInfo' => '\ResultStatusInfo',
    'ServiceProviderEntityInfo' => '\ServiceProviderEntityInfo',
    'ServiceProviderRawError' => '\ServiceProviderRawError',
    'BISError' => '\BISError',
    'ServiceEntityFaultInfo' => '\ServiceEntityFaultInfo',
    'CSIApplicationException' => '\CSIApplicationException',
    'CancelProvisioningOrderRequestInfo' => '\CancelProvisioningOrderRequestInfo',
    'CancelProvisioningOrderResponseInfo' => '\CancelProvisioningOrderResponseInfo',
    'EchoRequestInfo' => '\EchoRequestInfo',
    'EchoResponseInfo' => '\EchoResponseInfo',
    'InquireASRStatusRequestInfo' => '\InquireASRStatusRequestInfo',
    'InquireASRStatusResponseInfo' => '\InquireASRStatusResponseInfo',
    'InquireNetworkProductCatalogRequestInfo' => '\InquireNetworkProductCatalogRequestInfo',
    'InquireNetworkProductCatalogResponseInfo' => '\InquireNetworkProductCatalogResponseInfo',
    'AvailableTransportSpeedsDetails' => '\AvailableTransportSpeedsDetails',
    'LinkedAccessSpeedDetails' => '\LinkedAccessSpeedDetails',
    'AvailableASEPortSpeeds' => '\AvailableASEPortSpeeds',
    'SupportedCirSpeedXrefs' => '\SupportedCirSpeedXrefs',
    'AvailableASECirSpeeds' => '\AvailableASECirSpeeds',
    'SupportedCosList' => '\SupportedCosList',
    'InquireNetworkProductPriceQuoteRequestInfo' => '\InquireNetworkProductPriceQuoteRequestInfo',
    'NetworkSitePriceRequestDetails' => '\NetworkSitePriceRequestDetails',
    'SiteSelectionDetails' => '\SiteSelectionDetails',
    'SelectedAccessSpeed' => '\SelectedAccessSpeed',
    'InquireNetworkProductPriceQuoteResponseInfo' => '\InquireNetworkProductPriceQuoteResponseInfo',
    'InquireNetworkProductRateCardRequestInfo' => '\InquireNetworkProductRateCardRequestInfo',
    'InquireNetworkProductRateCardResponseInfo' => '\InquireNetworkProductRateCardResponseInfo',
    'NetworkRateCardDetails' => '\NetworkRateCardDetails',
    'AccessPriceDetails' => '\AccessPriceDetails',
    'AseRateCardDetails' => '\AseRateCardDetails',
    'asePortSpeedPriceDetails' => '\asePortSpeedPriceDetails',
    'aseCirSpeedPriceDetails' => '\aseCirSpeedPriceDetails',
    'SubmitWirelineProvisioningOrderRequestInfo' => '\SubmitWirelineProvisioningOrderRequestInfo',
    'SiteInformationDetails' => '\SiteInformationDetails',
    'ProvisionalSiteDetails' => '\ProvisionalSiteDetails',
    'AddressDetails' => '\AddressDetails',
    'NetworkSpeedDetails' => '\NetworkSpeedDetails',
    'SelectedAccessSpeedDetails' => '\SelectedAccessSpeedDetails',
    'NetworkSitePriceRequest' => '\NetworkSitePriceRequest',
    'RdsInformationDetails' => '\RdsInformationDetails',
    'InstallationDetails' => '\InstallationDetails',
    'ContactDetails' => '\ContactDetails',
    'AccessFeaturesOptions' => '\AccessFeaturesOptions',
    'TotalServiceDetails' => '\TotalServiceDetails',
    'AVPNPortDetails' => '\AVPNPortDetails',
    'LogicalChannelInformation' => '\LogicalChannelInformation',
    'PortDetails' => '\PortDetails',
    'UnmanagedRouterEquipmentDetails' => '\UnmanagedRouterEquipmentDetails',
    'AttRouterShipDetails' => '\AttRouterShipDetails',
    'ClassOfServiceDetails' => '\ClassOfServiceDetails',
    'EndCustomerDetails' => '\EndCustomerDetails',
    'SubmitWirelineProvisioningOrderResponseInfo' => '\SubmitWirelineProvisioningOrderResponseInfo',
    'OrderProvisioningSitePriceDetails' => '\OrderProvisioningSitePriceDetails',
    'ValidateAddressServiceAvailabilityRequestInfo' => '\ValidateAddressServiceAvailabilityRequestInfo',
    'ValidateAddressServiceAvailabilityResponseInfo' => '\ValidateAddressServiceAvailabilityResponseInfo',
    'AddressServiceAvailability' => '\AddressServiceAvailability',
    'ServiceAvailabilityDetails' => '\ServiceAvailabilityDetails',
    'Ethernet' => '\Ethernet',
    'Service' => '\Service',
    'OtherSpeed' => '\OtherSpeed',
    'ExistingConnectivity' => '\ExistingConnectivity',
    'PrivateLine' => '\PrivateLine');

  /**
   * 
   * @param array $options A array of config values
   * @param string $wsdl The wsdl file to use
   * @access public
   */
  public function __construct(array $options = array(), $wsdl = '../../wsdl/v84/CingularWirelessCSI.wsdl')
  {
    foreach (self::$classmap as $key => $value) {
      if (!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    
    parent::__construct($wsdl, $options);
  }

  /**
   * 
   * @param CancelProvisioningOrderRequestInfo $CancelProvisioningOrderRequest
   * @access public
   * @return CancelProvisioningOrderResponseInfo
   */
  public function CancelProvisioningOrder(CancelProvisioningOrderRequestInfo $CancelProvisioningOrderRequest)
  {
    return $this->__soapCall('CancelProvisioningOrder', array($CancelProvisioningOrderRequest));
  }

  /**
   * 
   * @param EchoRequestInfo $EchoRequest
   * @access public
   * @return EchoResponseInfo
   */
  public function aEcho(EchoRequestInfo $EchoRequest)
  {
    return $this->__soapCall('Echo', array($EchoRequest));
  }

  /**
   * 
   * @param InquireASRStatusRequestInfo $InquireASRStatusRequest
   * @access public
   * @return InquireASRStatusResponseInfo
   */
  public function InquireASRStatus(InquireASRStatusRequestInfo $InquireASRStatusRequest)
  {
    return $this->__soapCall('InquireASRStatus', array($InquireASRStatusRequest));
  }

  /**
   * 
   * @param InquireNetworkProductCatalogRequestInfo $InquireNetworkProductCatalogRequest
   * @access public
   * @return InquireNetworkProductCatalogResponseInfo
   */
  public function InquireNetworkProductCatalog(InquireNetworkProductCatalogRequestInfo $InquireNetworkProductCatalogRequest)
  {
    return $this->__soapCall('InquireNetworkProductCatalog', array($InquireNetworkProductCatalogRequest));
  }

  /**
   * 
   * @param InquireNetworkProductPriceQuoteRequestInfo $InquireNetworkProductPriceQuoteRequest
   * @access public
   * @return InquireNetworkProductPriceQuoteResponseInfo
   */
  public function InquireNetworkProductPriceQuote(InquireNetworkProductPriceQuoteRequestInfo $InquireNetworkProductPriceQuoteRequest)
  {
    return $this->__soapCall('InquireNetworkProductPriceQuote', array($InquireNetworkProductPriceQuoteRequest));
  }

  /**
   * 
   * @param InquireNetworkProductRateCardRequestInfo $InquireNetworkProductRateCardRequest
   * @access public
   * @return InquireNetworkProductRateCardResponseInfo
   */
  public function InquireNetworkProductRateCard(InquireNetworkProductRateCardRequestInfo $InquireNetworkProductRateCardRequest)
  {
    return $this->__soapCall('InquireNetworkProductRateCard', array($InquireNetworkProductRateCardRequest));
  }

  /**
   * 
   * @param SubmitWirelineProvisioningOrderRequestInfo $SubmitWirelineProvisioningOrderRequest
   * @access public
   * @return SubmitWirelineProvisioningOrderResponseInfo
   */
  public function SubmitWirelineProvisioningOrder(SubmitWirelineProvisioningOrderRequestInfo $SubmitWirelineProvisioningOrderRequest)
  {
    return $this->__soapCall('SubmitWirelineProvisioningOrder', array($SubmitWirelineProvisioningOrderRequest));
  }

  /**
   * 
   * @param ValidateAddressServiceAvailabilityRequestInfo $ValidateAddressServiceAvailabilityRequest
   * @access public
   * @return ValidateAddressServiceAvailabilityResponseInfo
   */
  public function ValidateAddressServiceAvailability(ValidateAddressServiceAvailabilityRequestInfo $ValidateAddressServiceAvailabilityRequest)
  {
    return $this->__soapCall('ValidateAddressServiceAvailability', array($ValidateAddressServiceAvailabilityRequest));
  }

}
