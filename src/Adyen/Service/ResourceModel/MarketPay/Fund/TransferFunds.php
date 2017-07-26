<?php

namespace Adyen\Service\ResourceModel\MarketPay\Fund;

use Adyen\Service\AbstractResource;

class TransferFunds extends AbstractResource {

	protected $_requiredFields = array(
		'sourceAccountCode',
		'destinationAccountCode',
		'transferCode',
		'amount.currency',
		'amount.value'
	);

	protected $_endpoint;

	public function __construct($service) {

		$this->_endpoint = $service
			                   ->getClient()
			                   ->getConfig()
			                   ->get('marketPayEndpoint') .
		                   'cal/services/Fund/' . $service->getClient()->getMarketPayApiVersion() . '/transferFunds';

		parent::__construct($service, $this->_endpoint, $this->_requiredFields);

	}

}