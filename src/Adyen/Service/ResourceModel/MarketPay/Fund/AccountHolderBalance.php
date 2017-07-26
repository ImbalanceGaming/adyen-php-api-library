<?php

namespace Adyen\Service\ResourceModel\MarketPay\Fund;

use Adyen\Service\AbstractResource;

class AccountHolderBalance extends AbstractResource {

	protected $_requiredFields = array(
		'accountHolderCode',
	);

	protected $_endpoint;

	public function __construct($service) {

		$this->_endpoint = $service
			                   ->getClient()
			                   ->getConfig()
			                   ->get('marketPayEndpoint') .
		                   'cal/services/Fund/' . $service->getClient()->getMarketPayApiVersion() . '/accountHolderBalance';

		parent::__construct($service, $this->_endpoint, $this->_requiredFields);

	}

}