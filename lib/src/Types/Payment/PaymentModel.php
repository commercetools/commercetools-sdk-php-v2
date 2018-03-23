<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Common\ResourceModel;

use Commercetools\Types\Customer\CustomerReference;
use Commercetools\Types\Type\CustomFields;
use Commercetools\Builder\PaymentUpdateBuilder;
use Commercetools\Types\Type\CustomFieldsCollection;
use Commercetools\Types\Common\TypedMoney;
use Commercetools\Types\Common\Resource;

class PaymentModel extends ResourceModel implements Payment {
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
     * @var TypedMoney
     */
    protected $amountPlanned;
    /**
     * @var TypedMoney
     */
    protected $amountAuthorized;
    /**
     * @var string
     */
    protected $authorizedUntil;
    /**
     * @var TypedMoney
     */
    protected $amountPaid;
    /**
     * @var TypedMoney
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
     * @var TransactionCollection
     */
    protected $transactions;
    /**
     * @var CustomFieldsCollection
     */
    protected $interfaceInteractions;
    /**
     * @var CustomFields
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
            $value = $this->raw(Payment::FIELD_CUSTOMER);
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
            $value = $this->raw(Payment::FIELD_EXTERNAL_ID);
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
            $value = $this->raw(Payment::FIELD_INTERFACE_ID);
            $value = (string)$value;
            $this->interfaceId = $value;
        }
        return $this->interfaceId;
    }
    /**
     * @return TypedMoney
     */
    public function getAmountPlanned()
    {
        if (is_null($this->amountPlanned)) {
            $value = $this->raw(Payment::FIELD_AMOUNT_PLANNED);
            $resolvedClass = $this->resolveDiscriminator(TypedMoney::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->amountPlanned = $value;
        }
        return $this->amountPlanned;
    }
    /**
     * @return TypedMoney
     */
    public function getAmountAuthorized()
    {
        if (is_null($this->amountAuthorized)) {
            $value = $this->raw(Payment::FIELD_AMOUNT_AUTHORIZED);
            $resolvedClass = $this->resolveDiscriminator(TypedMoney::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

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
            $value = $this->raw(Payment::FIELD_AUTHORIZED_UNTIL);
            $value = (string)$value;
            $this->authorizedUntil = $value;
        }
        return $this->authorizedUntil;
    }
    /**
     * @return TypedMoney
     */
    public function getAmountPaid()
    {
        if (is_null($this->amountPaid)) {
            $value = $this->raw(Payment::FIELD_AMOUNT_PAID);
            $resolvedClass = $this->resolveDiscriminator(TypedMoney::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->amountPaid = $value;
        }
        return $this->amountPaid;
    }
    /**
     * @return TypedMoney
     */
    public function getAmountRefunded()
    {
        if (is_null($this->amountRefunded)) {
            $value = $this->raw(Payment::FIELD_AMOUNT_REFUNDED);
            $resolvedClass = $this->resolveDiscriminator(TypedMoney::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

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
            $value = $this->raw(Payment::FIELD_PAYMENT_METHOD_INFO);
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
            $value = $this->raw(Payment::FIELD_PAYMENT_STATUS);
            if (is_null($value)) {
                return $this->mapData(PaymentStatus::class, null);
            }
            $value = $this->mapData(PaymentStatus::class, $value);

            $this->paymentStatus = $value;
        }
        return $this->paymentStatus;
    }
    /**
     * @return TransactionCollection
     */
    public function getTransactions()
    {
        if (is_null($this->transactions)) {
            $value = $this->raw(Payment::FIELD_TRANSACTIONS);
            if (is_null($value)) {
                return $this->mapData(TransactionCollection::class, null);
            }
            $value = $this->mapData(TransactionCollection::class, $value);
            $this->transactions = $value;
        }
        return $this->transactions;
    }
    /**
     * @return CustomFieldsCollection
     */
    public function getInterfaceInteractions()
    {
        if (is_null($this->interfaceInteractions)) {
            $value = $this->raw(Payment::FIELD_INTERFACE_INTERACTIONS);
            if (is_null($value)) {
                return $this->mapData(CustomFieldsCollection::class, null);
            }
            $value = $this->mapData(CustomFieldsCollection::class, $value);
            $this->interfaceInteractions = $value;
        }
        return $this->interfaceInteractions;
    }
    /**
     * @return CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            $value = $this->raw(Payment::FIELD_CUSTOM);
            if (is_null($value)) {
                return $this->mapData(CustomFields::class, null);
            }
            $value = $this->mapData(CustomFields::class, $value);

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
            $value = $this->raw(Payment::FIELD_KEY);
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
     * @param TypedMoney $amountPlanned
     * @return $this
     */
    public function setAmountPlanned(TypedMoney $amountPlanned)
    {
        $this->amountPlanned = $amountPlanned;

        return $this;
    }
    /**
     * @param TypedMoney $amountAuthorized
     * @return $this
     */
    public function setAmountAuthorized(TypedMoney $amountAuthorized)
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
     * @param TypedMoney $amountPaid
     * @return $this
     */
    public function setAmountPaid(TypedMoney $amountPaid)
    {
        $this->amountPaid = $amountPaid;

        return $this;
    }
    /**
     * @param TypedMoney $amountRefunded
     * @return $this
     */
    public function setAmountRefunded(TypedMoney $amountRefunded)
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
     * @param TransactionCollection $transactions
     * @return $this
     */
    public function setTransactions(TransactionCollection $transactions)
    {
        $this->transactions = $transactions;

        return $this;
    }
    /**
     * @param CustomFieldsCollection $interfaceInteractions
     * @return $this
     */
    public function setInterfaceInteractions(CustomFieldsCollection $interfaceInteractions)
    {
        $this->interfaceInteractions = $interfaceInteractions;

        return $this;
    }
    /**
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom)
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


    /**
     * @return PaymentUpdateBuilder
     */
    public function update()
    {
        $builder = new PaymentUpdateBuilder();
        $builder->setMapper($this->getMapper());
        $builder->with($this);
        return $builder;
    }
}
