<?php

namespace Adyen\Service\ResourceModel\MarketPay\Account;

use Adyen\Service\AbstractResource;

class UploadDocument extends AbstractResource {

	protected $_requiredFields = array(
		'documentContent',
		'documentDetail.accountHolderCode',
		'documentDetail.documentType',
		'documentDetail.filename',
	);

	protected $_endpoint;

	public function __construct($service) {

		$this->_endpoint = $service
			                   ->getClient()
			                   ->getConfig()
			                   ->get('marketPayEndpoint') .
		                   'cal/services/Account/' . $service->getClient()->getMarketPayApiVersion() . '/updateAccountHolder';

		parent::__construct($service, $this->_endpoint, $this->_requiredFields);

	}

}