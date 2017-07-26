<?php

namespace Adyen\Service\ResourceModel\MarketPay\Account;

use Adyen\Service\AbstractResource;

class DeleteShareholders extends AbstractResource {

	protected $_requiredFields = array(
		'accountHolderCode',
		'bankAccountUUIDs'
	);

	protected $_endpoint;

	public function __construct($service) {

		$this->_endpoint = $service
			                   ->getClient()
			                   ->getConfig()
			                   ->get('marketPayEndpoint') .
		                   'cal/services/Account/' . $service->getClient()->getMarketPayApiVersion() . '/deleteShareholders';

		parent::__construct($service, $this->_endpoint, $this->_requiredFields);

	}

}