<?php

namespace Adyen\Service;

use Adyen\Service\ResourceModel\MarketPay\Account\CloseAccount;
use Adyen\Service\ResourceModel\MarketPay\Account\CloseAccountHolder;
use Adyen\Service\ResourceModel\MarketPay\Account\CreateAccount;
use Adyen\Service\ResourceModel\MarketPay\Account\CreateAccountHolder;
use Adyen\Service\ResourceModel\MarketPay\Account\DeleteBankAccount;
use Adyen\Service\ResourceModel\MarketPay\Account\DeleteShareholders;
use Adyen\Service\ResourceModel\MarketPay\Account\GetAccountHolder;
use Adyen\Service\ResourceModel\MarketPay\Account\GetUploadedDocuments;
use Adyen\Service\ResourceModel\MarketPay\Account\SuspendAccountHolder;
use Adyen\Service\ResourceModel\MarketPay\Account\UnSuspendAccountHolder;
use Adyen\Service\ResourceModel\MarketPay\Account\UpdateAccountHolder;
use Adyen\Service\ResourceModel\MarketPay\Account\UpdateAccountHolderState;
use Adyen\Service\ResourceModel\MarketPay\Account\UploadDocument;
use Adyen\Service\ResourceModel\MarketPay\Fund\AccountHolderBalance;
use Adyen\Service\ResourceModel\MarketPay\Fund\PayoutAccountHolder;
use Adyen\Service\ResourceModel\MarketPay\Fund\RefundNotPaidOutTransfers;
use Adyen\Service\ResourceModel\MarketPay\Fund\TransferFunds;

class MarketPay extends \Adyen\Service {

	protected $_closeAccount;
	protected $_closeAccountHolder;
	protected $_createAccount;
	protected $_createAccountHolder;
	protected $_deleteBankAccount;
	protected $_deleteShareHolder;
	protected $_getAccountHolder;
	protected $_getUploadedDocuments;
	protected $_suspendAccountHolder;
	protected $_unSuspendAccountHolder;
	protected $_updateAccountHolder;
	protected $_updateAccountHolderState;
	protected $_uploadDocument;
	protected $_accountHolderBalance;
	protected $_payoutAccountHolder;
	protected $_refundNotPaidOutTransfers;
	protected $_transferFunds;

	public function __construct(\Adyen\Client $client) {

		parent::__construct($client);

		$this->_closeAccount = new CloseAccount($this);
		$this->_closeAccountHolder = new CloseAccountHolder($this);
		$this->_createAccount = new CreateAccount($this);
		$this->_createAccountHolder = new CreateAccountHolder($this);
		$this->_deleteBankAccount = new DeleteBankAccount($this);
		$this->_deleteShareHolder = new DeleteShareholders($this);
		$this->_getAccountHolder = new GetAccountHolder($this);
		$this->_getUploadedDocuments = new GetUploadedDocuments($this);
		$this->_suspendAccountHolder = new SuspendAccountHolder($this);
		$this->_unSuspendAccountHolder = new UnSuspendAccountHolder($this);
		$this->_updateAccountHolder = new UpdateAccountHolder($this);
		$this->_updateAccountHolderState = new UpdateAccountHolderState($this);
		$this->_uploadDocument = new UploadDocument($this);
		$this->_accountHolderBalance = new AccountHolderBalance($this);
		$this->_payoutAccountHolder = new PayoutAccountHolder($this);
		$this->_refundNotPaidOutTransfers = new RefundNotPaidOutTransfers($this);
		$this->_transferFunds = new TransferFunds($this);

	}

	public function createAccountHolder($params) {
		return $this->_createAccountHolder->request($params);
	}

}