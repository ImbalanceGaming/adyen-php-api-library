<?php

namespace Adyen\Service\ResourceModel\MarketPay\Fund;

use Adyen\Service\AbstractResource;

class AccountHolderTransactionList extends AbstractResource {

	protected $_requiredFields = array(
		'accountHolderCode',
	);

	protected $_endpoint;

	public function __construct($service) {

		$this->_endpoint = $service
			                   ->getClient()
			                   ->getConfig()
			                   ->get('marketPayEndpoint') .
		                   'cal/services/Fund/' . $service->getClient()->getMarketPayApiVersion() . '/accountHolderTransactionList';

		parent::__construct($service, $this->_endpoint, $this->_requiredFields);

	}

}