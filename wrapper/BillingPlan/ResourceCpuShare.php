<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Billing Plan Base Resources
 *
 * @category	API WRAPPER
 * @package		OnApp
 * @subpackage	BillingPlan
 * @author		Andrew Yatskovets
 * @copyright	(c) 2011 OnApp
 * @link		http://www.onapp.com/
 * @see			OnApp
 */

/**
 * The ONAPP_BillingPlan_ResourceCpuShare class uses the following basic methods:
 * {@link load}, {@link save}, {@link delete}, and {@link getList}.
 * 
 * For full fields reference and curl request details visit: ( http://help.onapp.com/manual.php?m=2 )
 */
class OnApp_BillingPlan_ResourceCpuShare extends OnApp_BillingPlan_BaseResource {
	/**
	 * API Fields description
	 *
	 * @param string|float $version OnApp API version
	 * @param string $className current class' name
	 * @return array
	 */
	public function initFields( $version = null, $className = '' ) {
		$this->fields[ 'resource_class' ] = array(
			ONAPP_FIELD_MAP => '_resource_class',
			ONAPP_FIELD_TYPE => 'string',
			ONAPP_FIELD_REQUIRED => true,
			ONAPP_FIELD_READ_ONLY => true,
			ONAPP_FIELD_DEFAULT_VALUE => 'Resource::CpuShare'
		);
		parent::initFields( $version, __CLASS__ );

		return $this->fields;
	}
}