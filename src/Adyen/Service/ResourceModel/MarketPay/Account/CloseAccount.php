<?php

namespace Adyen\Service\ResourceModel\MarketPay\Account;

use Adyen\Service\AbstractResource;

class CloseAccount extends AbstractResource {

	protected $_requiredFields = array(
		'accountCode',
	);

	protected $_endpoint;

	public function __construct($service) {

		$this->_endpoint = $service
			                   ->getClient()
			                   ->getConfig()
			                   ->get('marketPayEndpoint') .
		                   'cal/services/Account/' . $service->getClient()->getMarketPayApiVersion() . '/closeAccount';

		parent::__construct($service, $this->_endpoint, $this->_requiredFields);

	}

}