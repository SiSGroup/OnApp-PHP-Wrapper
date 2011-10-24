<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Edge Group Location
 *
 * @todo Add description
 *
 * @category	API WRAPPER
 * @package		OnApp
 * @subpackage	Hypervisor
 * @author		Yakubskiy Yuriy
 * @copyright	(c) 2011 OnApp
 * @link		http://www.onapp.com/
 * @see			OnApp
 */

/**
 * OnApp_EdgeGroup_Location
 *
 * Edge Group nested class and support no basic methods
 *
 */
class OnApp_EdgeGroup_Location_Operator_Setting extends OnApp {
	/**
	 * root tag used in the API request
	 *
	 * @var string
	 */
	var $_tagRoot = '';

	/**
	 * alias processing the object data
	 *
	 * @var string
	 */
	var $_resource = '';

	public function __construct() {
		parent::__construct();
		$this->className = __CLASS__;
	}

	/**
	 * API Fields description
	 *
	 * @param string|float $version OnApp API version
	 * @param string $className current class' name
	 * @return array
	 */
	public function initFields( $version = null, $className = '' ) {
		switch( $version ) {
			case '2.3':
				$this->fields = array(
					'logFtpUsername' => array(
						ONAPP_FIELD_MAP => '_logFtpUsername',
                        ONAPP_FIELD_TYPE => 'string',
					),
                    'baseHostname' => array(
						ONAPP_FIELD_MAP => '_baseHostname',
						ONAPP_FIELD_TYPE => 'string',
					),
                    'sslCertificate' => array(
						ONAPP_FIELD_MAP => '_sslCertificate',
						ONAPP_FIELD_TYPE => 'string',
					),
					'trafficPolicy' => array(
						ONAPP_FIELD_MAP => '_trafficPolicy',
						ONAPP_FIELD_TYPE => 'string',
					),
					'logDeliveryMethod' => array(
						ONAPP_FIELD_MAP => '_logDeliveryMethod',
						ONAPP_FIELD_TYPE => 'string',
					),
                    'logFtpPassword' => array(
						ONAPP_FIELD_MAP => '_logFtpPassword',
						ONAPP_FIELD_TYPE => 'string',
					),
					'httpCacheExpiry' => array(
						ONAPP_FIELD_MAP => '_httpCacheExpiry',
						ONAPP_FIELD_TYPE => 'integer',
					),
					'httpErrorPage' => array(
						ONAPP_FIELD_MAP => '_httpErrorPage',
						ONAPP_FIELD_TYPE => 'string',
					),
					'logFtpDirectory' => array(
						ONAPP_FIELD_MAP => '_logFtpDirectory',
						ONAPP_FIELD_TYPE => 'string',
					),
					'logFormat' => array(
						ONAPP_FIELD_MAP => '_logFormat',
						ONAPP_FIELD_TYPE => 'string',
					),
					'logSyslogHostname' => array(
						ONAPP_FIELD_MAP => '_logSyslogHostname',
                        ONAPP_FIELD_TYPE => 'string',
					),
                    'logFtpHostname' => array(
						ONAPP_FIELD_MAP => '_logFtpHostname',
                        ONAPP_FIELD_TYPE => 'string',
					),
                    'logFtpPort' => array(
						ONAPP_FIELD_MAP => '_logFtpPort',
                        ONAPP_FIELD_TYPE => 'integer',
					),
                    'sslKey' => array(
						ONAPP_FIELD_MAP => '_sslKey',
                        ONAPP_FIELD_TYPE => 'string',
					),

				);
				break;
		}

		parent::initFields( $version, __CLASS__ );
		return $this->fields;
	}

    /**
	 * Activates action performed with object
	 *
	 * @param string $action_name the name of action
	 *
	 * @access public
	 */
	function activate( $action_name ) {
		switch( $action_name ) {
			case ONAPP_ACTIVATE_GETLIST:
			case ONAPP_ACTIVATE_SAVE:
			case ONAPP_ACTIVATE_DELETE:
				exit( 'Call to undefined method ' . __CLASS__ . '::' . $action_name . '()' );
				break;
		}
	}

}