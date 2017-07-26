<?php

namespace Adyen\Service\ResourceModel\MarketPay\Fund;

use Adyen\Service\AbstractResource;

class PayoutAccountHolder extends AbstractResource {

	protected $_requiredFields = array(
		'accountHolderCode',
		'accountCode',
		'amount.currency',
		'amount.value',
		'bankAccountUUID'
	);

	protected $_endpoint;

	public function __construct($service) {

		$this->_endpoint = $service
			                   ->getClient()
			                   ->getConfig()
			                   ->get('marketPayEndpoint') .
		                   'cal/services/Fund/' . $service->getClient()->getMarketPayApiVersion() . '/payoutAccountHolder';

		parent::__construct($service, $this->_endpoint, $this->_requiredFields);

	}

}