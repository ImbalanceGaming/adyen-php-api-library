<?php

namespace Adyen\Service\ResourceModel\MarketPay\Fund;

use Adyen\Service\AbstractResource;

class RefundNotPaidOutTransfers extends AbstractResource {

	protected $_requiredFields = array(
		'accountHolderCode',
		'accountCode',
	);

	protected $_endpoint;

	public function __construct($service) {

		$this->_endpoint = $service
			                   ->getClient()
			                   ->getConfig()
			                   ->get('marketPayEndpoint') .
		                   'cal/services/Fund/' . $service->getClient()->getMarketPayApiVersion() . '/refundNotPaidOutTransfers';

		parent::__construct($service, $this->_endpoint, $this->_requiredFields);

	}

}