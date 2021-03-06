<?php
/**
 * @package PayPal
 */

/**
 * Make sure our parent class is defined.
 */
require_once 'lib/core/lhshop/paymenthandlers/paypal_handler/php-sdk/lib/PayPal/Type/XSDSimpleType.php';

/**
 * SetAccessPermissionsRequestDetailsType
 *
 * @package PayPal
 */
class SetAccessPermissionsRequestDetailsType extends XSDSimpleType
{
    /**
     * URL to which the customer's browser is returned after choosing to login with
     * PayPal.
     */
    var $ReturnURL;

    /**
     * URL to which the customer is returned if he does not approve the use of PayPal
     * login.
     */
    var $CancelURL;

    /**
     * URL to which the customer's browser is returned after user logs out from PayPal.
     */
    var $LogoutURL;

    /**
     * The type of the flow.
     */
    var $InitFlowType;

    /**
     * The used to decide SkipLogin allowed or not.
     */
    var $SkipLoginPage;

    /**
     * contains information about API Services
     */
    var $RequiredAccessPermissions;

    /**
     * contains information about API Services
     */
    var $OptionalAccessPermissions;

    /**
     * Locale of pages displayed by PayPal during Authentication Login.
     */
    var $LocaleCode;

    /**
     * Sets the Custom Payment Page Style for flow pages associated with this
     * button/link. PageStyle corresponds to the HTML variable page_style for
     * customizing flow pages. The value is the same as the Page Style Name you chose
     * when adding or editing the page style from the Profile subtab of the My Account
     * tab of your PayPal account.
     */
    var $PageStyle;

    /**
     * A URL for the image you want to appear at the top left of the flow page. The
     * image has a maximum size of 750 pixels wide by 90 pixels high. PayPal recommends
     * that you provide an image that is stored on a secure (https) server.
     */
    var $cpp_header_image;

    /**
     * Sets the border color around the header of the flow page. The border is a
     * 2-pixel perimeter around the header space, which is 750 pixels wide by 90 pixels
     * high.
     */
    var $cpp_header_border_color;

    /**
     * Sets the background color for the header of the flow page.
     */
    var $cpp_header_back_color;

    /**
     * Sets the background color for the payment page.
     */
    var $cpp_payflow_color;

    /**
     * First Name of the user, this information is used if user chooses to signup with
     * PayPal.
     */
    var $FirstName;

    /**
     * Last Name of the user, this information is used if user chooses to signup with
     * PayPal.
     */
    var $LastName;

    /**
     * User address, this information is used when user chooses to signup for PayPal.
     */
    var $Address;

    function SetAccessPermissionsRequestDetailsType()
    {
        parent::XSDSimpleType();
        $this->_namespace = 'urn:ebay:apis:eBLBaseComponents';
        $this->_elements = array_merge($this->_elements,
            array (
              'ReturnURL' => 
              array (
                'required' => true,
                'type' => 'string',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
              'CancelURL' => 
              array (
                'required' => true,
                'type' => 'string',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
              'LogoutURL' => 
              array (
                'required' => true,
                'type' => 'string',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
              'InitFlowType' => 
              array (
                'required' => false,
                'type' => 'string',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
              'SkipLoginPage' => 
              array (
                'required' => false,
                'type' => 'string',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
              'RequiredAccessPermissions' => 
              array (
                'required' => false,
                'type' => 'string',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
              'OptionalAccessPermissions' => 
              array (
                'required' => false,
                'type' => 'string',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
              'LocaleCode' => 
              array (
                'required' => false,
                'type' => 'string',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
              'PageStyle' => 
              array (
                'required' => false,
                'type' => 'string',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
              'cpp_header_image' => 
              array (
                'required' => false,
                'type' => 'string',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
              'cpp_header_border_color' => 
              array (
                'required' => false,
                'type' => 'string',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
              'cpp_header_back_color' => 
              array (
                'required' => false,
                'type' => 'string',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
              'cpp_payflow_color' => 
              array (
                'required' => false,
                'type' => 'string',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
              'FirstName' => 
              array (
                'required' => false,
                'type' => 'string',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
              'LastName' => 
              array (
                'required' => false,
                'type' => 'string',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
              'Address' => 
              array (
                'required' => false,
                'type' => 'AddressType',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
            ));
    }

    function getReturnURL()
    {
        return $this->ReturnURL;
    }
    function setReturnURL($ReturnURL, $charset = 'iso-8859-1')
    {
        $this->ReturnURL = $ReturnURL;
        $this->_elements['ReturnURL']['charset'] = $charset;
    }
    function getCancelURL()
    {
        return $this->CancelURL;
    }
    function setCancelURL($CancelURL, $charset = 'iso-8859-1')
    {
        $this->CancelURL = $CancelURL;
        $this->_elements['CancelURL']['charset'] = $charset;
    }
    function getLogoutURL()
    {
        return $this->LogoutURL;
    }
    function setLogoutURL($LogoutURL, $charset = 'iso-8859-1')
    {
        $this->LogoutURL = $LogoutURL;
        $this->_elements['LogoutURL']['charset'] = $charset;
    }
    function getInitFlowType()
    {
        return $this->InitFlowType;
    }
    function setInitFlowType($InitFlowType, $charset = 'iso-8859-1')
    {
        $this->InitFlowType = $InitFlowType;
        $this->_elements['InitFlowType']['charset'] = $charset;
    }
    function getSkipLoginPage()
    {
        return $this->SkipLoginPage;
    }
    function setSkipLoginPage($SkipLoginPage, $charset = 'iso-8859-1')
    {
        $this->SkipLoginPage = $SkipLoginPage;
        $this->_elements['SkipLoginPage']['charset'] = $charset;
    }
    function getRequiredAccessPermissions()
    {
        return $this->RequiredAccessPermissions;
    }
    function setRequiredAccessPermissions($RequiredAccessPermissions, $charset = 'iso-8859-1')
    {
        $this->RequiredAccessPermissions = $RequiredAccessPermissions;
        $this->_elements['RequiredAccessPermissions']['charset'] = $charset;
    }
    function getOptionalAccessPermissions()
    {
        return $this->OptionalAccessPermissions;
    }
    function setOptionalAccessPermissions($OptionalAccessPermissions, $charset = 'iso-8859-1')
    {
        $this->OptionalAccessPermissions = $OptionalAccessPermissions;
        $this->_elements['OptionalAccessPermissions']['charset'] = $charset;
    }
    function getLocaleCode()
    {
        return $this->LocaleCode;
    }
    function setLocaleCode($LocaleCode, $charset = 'iso-8859-1')
    {
        $this->LocaleCode = $LocaleCode;
        $this->_elements['LocaleCode']['charset'] = $charset;
    }
    function getPageStyle()
    {
        return $this->PageStyle;
    }
    function setPageStyle($PageStyle, $charset = 'iso-8859-1')
    {
        $this->PageStyle = $PageStyle;
        $this->_elements['PageStyle']['charset'] = $charset;
    }
    function getcpp_header_image()
    {
        return $this->cpp_header_image;
    }
    function setcpp_header_image($cpp_header_image, $charset = 'iso-8859-1')
    {
        $this->cpp_header_image = $cpp_header_image;
        $this->_elements['cpp_header_image']['charset'] = $charset;
    }
    function getcpp_header_border_color()
    {
        return $this->cpp_header_border_color;
    }
    function setcpp_header_border_color($cpp_header_border_color, $charset = 'iso-8859-1')
    {
        $this->cpp_header_border_color = $cpp_header_border_color;
        $this->_elements['cpp_header_border_color']['charset'] = $charset;
    }
    function getcpp_header_back_color()
    {
        return $this->cpp_header_back_color;
    }
    function setcpp_header_back_color($cpp_header_back_color, $charset = 'iso-8859-1')
    {
        $this->cpp_header_back_color = $cpp_header_back_color;
        $this->_elements['cpp_header_back_color']['charset'] = $charset;
    }
    function getcpp_payflow_color()
    {
        return $this->cpp_payflow_color;
    }
    function setcpp_payflow_color($cpp_payflow_color, $charset = 'iso-8859-1')
    {
        $this->cpp_payflow_color = $cpp_payflow_color;
        $this->_elements['cpp_payflow_color']['charset'] = $charset;
    }
    function getFirstName()
    {
        return $this->FirstName;
    }
    function setFirstName($FirstName, $charset = 'iso-8859-1')
    {
        $this->FirstName = $FirstName;
        $this->_elements['FirstName']['charset'] = $charset;
    }
    function getLastName()
    {
        return $this->LastName;
    }
    function setLastName($LastName, $charset = 'iso-8859-1')
    {
        $this->LastName = $LastName;
        $this->_elements['LastName']['charset'] = $charset;
    }
    function getAddress()
    {
        return $this->Address;
    }
    function setAddress($Address, $charset = 'iso-8859-1')
    {
        $this->Address = $Address;
        $this->_elements['Address']['charset'] = $charset;
    }
}
