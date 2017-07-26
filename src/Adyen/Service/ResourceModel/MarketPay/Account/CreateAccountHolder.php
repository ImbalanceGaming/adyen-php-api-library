<?php

namespace Adyen\Service\ResourceModel\MarketPay\Account;

use Adyen\Service\AbstractResource;

class CreateAccountHolder extends AbstractResource {

	protected $_requiredFields = array(
		'accountHolderCode',
		'legalEntity',
	);

	protected $_endpoint;

	public function __construct($service) {

		$this->_endpoint = $service
			                   ->getClient()
			                   ->getConfig()
			                   ->get('marketPayEndpoint') .
		                   'cal/services/Account/' . $service->getClient()->getMarketPayApiVersion() . '/createAccountHolder';

		parent::__construct($service, $this->_endpoint, $this->_requiredFields);

	}

}