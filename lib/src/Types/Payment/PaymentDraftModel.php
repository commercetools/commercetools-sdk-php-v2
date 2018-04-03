<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Type\CustomFieldsDraftCollection;
use Commercetools\Types\Type\CustomFieldsDraft;
use Commercetools\Types\Customer\CustomerReference;
use Commercetools\Types\Common\Money;

class PaymentDraftModel extends JsonObjectModel implements PaymentDraft {
    /**
     * @var CustomerReference
     */
    protected $customer;
    /**
     * @var string
     */
    protected $externalId;
    /**
     * @var string
     */
    protected $interfaceId;
    /**
     * @var Money
     */
    protected $amountPlanned;
    /**
     * @var Money
     */
    protected $amountAuthorized;
    /**
     * @var string
     */
    protected $authorizedUntil;
    /**
     * @var Money
     */
    protected $amountPaid;
    /**
     * @var Money
     */
    protected $amountRefunded;
    /**
     * @var PaymentMethodInfo
     */
    protected $paymentMethodInfo;
    /**
     * @var PaymentStatus
     */
    protected $paymentStatus;
    /**
     * @var TransactionDraftCollection
     */
    protected $transactions;
    /**
     * @var CustomFieldsDraftCollection
     */
    protected $interfaceInteractions;
    /**
     * @var CustomFieldsDraft
     */
    protected $custom;
    /**
     * @var string
     */
    protected $key;

    /**
     * @return CustomerReference
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            $value = $this->raw(PaymentDraft::FIELD_CUSTOMER);
            if (is_null($value)) {
                return $this->mapData(CustomerReference::class, null);
            }
            $value = $this->mapData(CustomerReference::class, $value);

            $this->customer = $value;
        }
        return $this->customer;
    }
    /**
     * @return string
     */
    public function getExternalId()
    {
        if (is_null($this->externalId)) {
            $value = $this->raw(PaymentDraft::FIELD_EXTERNAL_ID);
            $value = (string)$value;
            $this->externalId = $value;
        }
        return $this->externalId;
    }
    /**
     * @return string
     */
    public function getInterfaceId()
    {
        if (is_null($this->interfaceId)) {
            $value = $this->raw(PaymentDraft::FIELD_INTERFACE_ID);
            $value = (string)$value;
            $this->interfaceId = $value;
        }
        return $this->interfaceId;
    }
    /**
     * @return Money
     */
    public function getAmountPlanned()
    {
        if (is_null($this->amountPlanned)) {
            $value = $this->raw(PaymentDraft::FIELD_AMOUNT_PLANNED);
            if (is_null($value)) {
                return $this->mapData(Money::class, null);
            }
            $value = $this->mapData(Money::class, $value);

            $this->amountPlanned = $value;
        }
        return $this->amountPlanned;
    }
    /**
     * @return Money
     */
    public function getAmountAuthorized()
    {
        if (is_null($this->amountAuthorized)) {
            $value = $this->raw(PaymentDraft::FIELD_AMOUNT_AUTHORIZED);
            if (is_null($value)) {
                return $this->mapData(Money::class, null);
            }
            $value = $this->mapData(Money::class, $value);

            $this->amountAuthorized = $value;
        }
        return $this->amountAuthorized;
    }
    /**
     * @return string
     */
    public function getAuthorizedUntil()
    {
        if (is_null($this->authorizedUntil)) {
            $value = $this->raw(PaymentDraft::FIELD_AUTHORIZED_UNTIL);
            $value = (string)$value;
            $this->authorizedUntil = $value;
        }
        return $this->authorizedUntil;
    }
    /**
     * @return Money
     */
    public function getAmountPaid()
    {
        if (is_null($this->amountPaid)) {
            $value = $this->raw(PaymentDraft::FIELD_AMOUNT_PAID);
            if (is_null($value)) {
                return $this->mapData(Money::class, null);
            }
            $value = $this->mapData(Money::class, $value);

            $this->amountPaid = $value;
        }
        return $this->amountPaid;
    }
    /**
     * @return Money
     */
    public function getAmountRefunded()
    {
        if (is_null($this->amountRefunded)) {
            $value = $this->raw(PaymentDraft::FIELD_AMOUNT_REFUNDED);
            if (is_null($value)) {
                return $this->mapData(Money::class, null);
            }
            $value = $this->mapData(Money::class, $value);

            $this->amountRefunded = $value;
        }
        return $this->amountRefunded;
    }
    /**
     * @return PaymentMethodInfo
     */
    public function getPaymentMethodInfo()
    {
        if (is_null($this->paymentMethodInfo)) {
            $value = $this->raw(PaymentDraft::FIELD_PAYMENT_METHOD_INFO);
            if (is_null($value)) {
                return $this->mapData(PaymentMethodInfo::class, null);
            }
            $value = $this->mapData(PaymentMethodInfo::class, $value);

            $this->paymentMethodInfo = $value;
        }
        return $this->paymentMethodInfo;
    }
    /**
     * @return PaymentStatus
     */
    public function getPaymentStatus()
    {
        if (is_null($this->paymentStatus)) {
            $value = $this->raw(PaymentDraft::FIELD_PAYMENT_STATUS);
            if (is_null($value)) {
                return $this->mapData(PaymentStatus::class, null);
            }
            $value = $this->mapData(PaymentStatus::class, $value);

            $this->paymentStatus = $value;
        }
        return $this->paymentStatus;
    }
    /**
     * @return TransactionDraftCollection
     */
    public function getTransactions()
    {
        if (is_null($this->transactions)) {
            $value = $this->raw(PaymentDraft::FIELD_TRANSACTIONS);
            if (is_null($value)) {
                return $this->mapData(TransactionDraftCollection::class, null);
            }
            $value = $this->mapData(TransactionDraftCollection::class, $value);
            $this->transactions = $value;
        }
        return $this->transactions;
    }
    /**
     * @return CustomFieldsDraftCollection
     */
    public function getInterfaceInteractions()
    {
        if (is_null($this->interfaceInteractions)) {
            $value = $this->raw(PaymentDraft::FIELD_INTERFACE_INTERACTIONS);
            if (is_null($value)) {
                return $this->mapData(CustomFieldsDraftCollection::class, null);
            }
            $value = $this->mapData(CustomFieldsDraftCollection::class, $value);
            $this->interfaceInteractions = $value;
        }
        return $this->interfaceInteractions;
    }
    /**
     * @return CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            $value = $this->raw(PaymentDraft::FIELD_CUSTOM);
            if (is_null($value)) {
                return $this->mapData(CustomFieldsDraft::class, null);
            }
            $value = $this->mapData(CustomFieldsDraft::class, $value);

            $this->custom = $value;
        }
        return $this->custom;
    }
    /**
     * @return string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            $value = $this->raw(PaymentDraft::FIELD_KEY);
            $value = (string)$value;
            $this->key = $value;
        }
        return $this->key;
    }

    /**
     * @param CustomerReference $customer
     * @return $this
     */
    public function setCustomer(CustomerReference $customer)
    {
        $this->customer = $customer;

        return $this;
    }
    /**
     * @param string $externalId
     * @return $this
     */
    public function setExternalId(string $externalId)
    {
        $this->externalId = (string)$externalId;

        return $this;
    }
    /**
     * @param string $interfaceId
     * @return $this
     */
    public function setInterfaceId(string $interfaceId)
    {
        $this->interfaceId = (string)$interfaceId;

        return $this;
    }
    /**
     * @param Money $amountPlanned
     * @return $this
     */
    public function setAmountPlanned(Money $amountPlanned)
    {
        $this->amountPlanned = $amountPlanned;

        return $this;
    }
    /**
     * @param Money $amountAuthorized
     * @return $this
     */
    public function setAmountAuthorized(Money $amountAuthorized)
    {
        $this->amountAuthorized = $amountAuthorized;

        return $this;
    }
    /**
     * @param string $authorizedUntil
     * @return $this
     */
    public function setAuthorizedUntil(string $authorizedUntil)
    {
        $this->authorizedUntil = (string)$authorizedUntil;

        return $this;
    }
    /**
     * @param Money $amountPaid
     * @return $this
     */
    public function setAmountPaid(Money $amountPaid)
    {
        $this->amountPaid = $amountPaid;

        return $this;
    }
    /**
     * @param Money $amountRefunded
     * @return $this
     */
    public function setAmountRefunded(Money $amountRefunded)
    {
        $this->amountRefunded = $amountRefunded;

        return $this;
    }
    /**
     * @param PaymentMethodInfo $paymentMethodInfo
     * @return $this
     */
    public function setPaymentMethodInfo(PaymentMethodInfo $paymentMethodInfo)
    {
        $this->paymentMethodInfo = $paymentMethodInfo;

        return $this;
    }
    /**
     * @param PaymentStatus $paymentStatus
     * @return $this
     */
    public function setPaymentStatus(PaymentStatus $paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;

        return $this;
    }
    /**
     * @param TransactionDraftCollection $transactions
     * @return $this
     */
    public function setTransactions(TransactionDraftCollection $transactions)
    {
        $this->transactions = $transactions;

        return $this;
    }
    /**
     * @param CustomFieldsDraftCollection $interfaceInteractions
     * @return $this
     */
    public function setInterfaceInteractions(CustomFieldsDraftCollection $interfaceInteractions)
    {
        $this->interfaceInteractions = $interfaceInteractions;

        return $this;
    }
    /**
     * @param CustomFieldsDraft $custom
     * @return $this
     */
    public function setCustom(CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

        return $this;
    }
    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key)
    {
        $this->key = (string)$key;

        return $this;
    }

}
