<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyModel;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceModel;
use Commercetools\Api\Models\Payment\PaymentMethodInfo;
use Commercetools\Api\Models\Payment\PaymentMethodInfoModel;
use Commercetools\Api\Models\Payment\TransactionCollection;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class MyPaymentModel extends JsonObjectModel implements MyPayment
{
    /**
     * @var ?string
     */
    protected $anonymousId;

    /**
     * @var ?PaymentMethodInfo
     */
    protected $paymentMethodInfo;

    /**
     * @var ?CustomFields
     */
    protected $custom;

    /**
     * @var ?TypedMoney
     */
    protected $amountPlanned;

    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?TransactionCollection
     */
    protected $transactions;

    /**
     * @var ?int
     */
    protected $version;

    /**
     * @var ?CustomerReference
     */
    protected $customer;

    public function __construct(
        string $anonymousId = null,
        PaymentMethodInfo $paymentMethodInfo = null,
        CustomFields $custom = null,
        TypedMoney $amountPlanned = null,
        string $id = null,
        TransactionCollection $transactions = null,
        int $version = null,
        CustomerReference $customer = null
    ) {
        $this->anonymousId = $anonymousId;
        $this->paymentMethodInfo = $paymentMethodInfo;
        $this->custom = $custom;
        $this->amountPlanned = $amountPlanned;
        $this->id = $id;
        $this->transactions = $transactions;
        $this->version = $version;
        $this->customer = $customer;
    }

    /**
     * @return null|string
     */
    public function getAnonymousId()
    {
        if (is_null($this->anonymousId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyPayment::FIELD_ANONYMOUS_ID);
            if (is_null($data)) {
                return null;
            }
            $this->anonymousId = (string) $data;
        }

        return $this->anonymousId;
    }

    /**
     * @return null|PaymentMethodInfo
     */
    public function getPaymentMethodInfo()
    {
        if (is_null($this->paymentMethodInfo)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(MyPayment::FIELD_PAYMENT_METHOD_INFO);
            if (is_null($data)) {
                return null;
            }

            $this->paymentMethodInfo = PaymentMethodInfoModel::of($data);
        }

        return $this->paymentMethodInfo;
    }

    /**
     * @return null|CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(MyPayment::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsModel::of($data);
        }

        return $this->custom;
    }

    /**
     * @return null|TypedMoney
     */
    public function getAmountPlanned()
    {
        if (is_null($this->amountPlanned)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(MyPayment::FIELD_AMOUNT_PLANNED);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyModel::resolveDiscriminatorClass($data);
            $this->amountPlanned = $className::of($data);
        }

        return $this->amountPlanned;
    }

    /**
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyPayment::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * @return null|TransactionCollection
     */
    public function getTransactions()
    {
        if (is_null($this->transactions)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(MyPayment::FIELD_TRANSACTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->transactions = TransactionCollection::fromArray($data);
        }

        return $this->transactions;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(MyPayment::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * @return null|CustomerReference
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(MyPayment::FIELD_CUSTOMER);
            if (is_null($data)) {
                return null;
            }

            $this->customer = CustomerReferenceModel::of($data);
        }

        return $this->customer;
    }

    public function setAnonymousId(?string $anonymousId): void
    {
        $this->anonymousId = $anonymousId;
    }

    public function setPaymentMethodInfo(?PaymentMethodInfo $paymentMethodInfo): void
    {
        $this->paymentMethodInfo = $paymentMethodInfo;
    }

    public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }

    public function setAmountPlanned(?TypedMoney $amountPlanned): void
    {
        $this->amountPlanned = $amountPlanned;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setTransactions(?TransactionCollection $transactions): void
    {
        $this->transactions = $transactions;
    }

    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    public function setCustomer(?CustomerReference $customer): void
    {
        $this->customer = $customer;
    }
}
