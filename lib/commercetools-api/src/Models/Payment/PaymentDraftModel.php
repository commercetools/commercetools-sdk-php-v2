<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifierModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftCollection;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class PaymentDraftModel extends JsonObjectModel implements PaymentDraft
{
    /**
     *
     * @var ?CustomerResourceIdentifier
     */
    protected $customer;

    /**
     *
     * @var ?string
     */
    protected $anonymousId;

    /**
     *
     * @var ?string
     */
    protected $interfaceId;

    /**
     *
     * @var ?Money
     */
    protected $amountPlanned;

    /**
     *
     * @var ?PaymentMethodInfoDraft
     */
    protected $paymentMethodInfo;

    /**
     *
     * @var ?PaymentStatusDraft
     */
    protected $paymentStatus;

    /**
     *
     * @var ?TransactionDraftCollection
     */
    protected $transactions;

    /**
     *
     * @var ?CustomFieldsDraftCollection
     */
    protected $interfaceInteractions;

    /**
     *
     * @var ?CustomFieldsDraft
     */
    protected $custom;

    /**
     *
     * @var ?string
     */
    protected $key;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CustomerResourceIdentifier $customer = null,
        ?string $anonymousId = null,
        ?string $interfaceId = null,
        ?Money $amountPlanned = null,
        ?PaymentMethodInfoDraft $paymentMethodInfo = null,
        ?PaymentStatusDraft $paymentStatus = null,
        ?TransactionDraftCollection $transactions = null,
        ?CustomFieldsDraftCollection $interfaceInteractions = null,
        ?CustomFieldsDraft $custom = null,
        ?string $key = null
    ) {
        $this->customer = $customer;
        $this->anonymousId = $anonymousId;
        $this->interfaceId = $interfaceId;
        $this->amountPlanned = $amountPlanned;
        $this->paymentMethodInfo = $paymentMethodInfo;
        $this->paymentStatus = $paymentStatus;
        $this->transactions = $transactions;
        $this->interfaceInteractions = $interfaceInteractions;
        $this->custom = $custom;
        $this->key = $key;
    }

    /**
     * <p>Reference to a <a href="ctp:api:type:Customer">Customer</a> associated with the Payment.</p>
     *
     *
     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER);
            if (is_null($data)) {
                return null;
            }

            $this->customer = CustomerResourceIdentifierModel::of($data);
        }

        return $this->customer;
    }

    /**
     * <p><a href="ctp:api:type:AnonymousSession">Anonymous session</a> associated with the Payment.</p>
     *
     *
     * @return null|string
     */
    public function getAnonymousId()
    {
        if (is_null($this->anonymousId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ANONYMOUS_ID);
            if (is_null($data)) {
                return null;
            }
            $this->anonymousId = (string) $data;
        }

        return $this->anonymousId;
    }

    /**
     * <p>Identifier used by the payment service that processes the Payment (for example, a PSP).
     * The combination of <code>interfaceId</code> and the <code>paymentInterface</code> field on <a href="ctp:api:type:PaymentMethodInfo">PaymentMethodInfo</a> must be unique.
     * Once set, it cannot be changed.</p>
     *
     *
     * @return null|string
     */
    public function getInterfaceId()
    {
        if (is_null($this->interfaceId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_INTERFACE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->interfaceId = (string) $data;
        }

        return $this->interfaceId;
    }

    /**
     * <p>Money value the Payment intends to receive from the customer.
     * The value typically matches the <a href="ctp:api:type:Cart">Cart</a> or <a href="ctp:api:type:Order">Order</a> gross total.</p>
     *
     *
     * @return null|Money
     */
    public function getAmountPlanned()
    {
        if (is_null($this->amountPlanned)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_AMOUNT_PLANNED);
            if (is_null($data)) {
                return null;
            }

            $this->amountPlanned = MoneyModel::of($data);
        }

        return $this->amountPlanned;
    }

    /**
     * <p>Information regarding the payment interface (for example, a PSP), and the specific payment method used.</p>
     *
     *
     * @return null|PaymentMethodInfoDraft
     */
    public function getPaymentMethodInfo()
    {
        if (is_null($this->paymentMethodInfo)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PAYMENT_METHOD_INFO);
            if (is_null($data)) {
                return null;
            }

            $this->paymentMethodInfo = PaymentMethodInfoDraftModel::of($data);
        }

        return $this->paymentMethodInfo;
    }

    /**
     * <p>Current status of the Payment.</p>
     *
     *
     * @return null|PaymentStatusDraft
     */
    public function getPaymentStatus()
    {
        if (is_null($this->paymentStatus)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PAYMENT_STATUS);
            if (is_null($data)) {
                return null;
            }

            $this->paymentStatus = PaymentStatusDraftModel::of($data);
        }

        return $this->paymentStatus;
    }

    /**
     * <p>Financial transactions of the Payment. Each Transaction has a <a href="ctp:api:type:TransactionType">TransactionType</a> and a <a href="ctp:api:type:TransactionState">TransactionState</a>.</p>
     *
     *
     * @return null|TransactionDraftCollection
     */
    public function getTransactions()
    {
        if (is_null($this->transactions)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_TRANSACTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->transactions = TransactionDraftCollection::fromArray($data);
        }

        return $this->transactions;
    }

    /**
     * <p>Represents information exchange with the payment service, for example, a PSP. An interaction may be a request sent, or a response or notification received from the payment service.</p>
     *
     *
     * @return null|CustomFieldsDraftCollection
     */
    public function getInterfaceInteractions()
    {
        if (is_null($this->interfaceInteractions)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_INTERFACE_INTERACTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->interfaceInteractions = CustomFieldsDraftCollection::fromArray($data);
        }

        return $this->interfaceInteractions;
    }

    /**
     * <p>Custom Fields for the Payment.</p>
     *
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }

    /**
     * <p>User-defined unique identifier for the Payment.</p>
     *
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }


    /**
     * @param ?CustomerResourceIdentifier $customer
     */
    public function setCustomer(?CustomerResourceIdentifier $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * @param ?string $anonymousId
     */
    public function setAnonymousId(?string $anonymousId): void
    {
        $this->anonymousId = $anonymousId;
    }

    /**
     * @param ?string $interfaceId
     */
    public function setInterfaceId(?string $interfaceId): void
    {
        $this->interfaceId = $interfaceId;
    }

    /**
     * @param ?Money $amountPlanned
     */
    public function setAmountPlanned(?Money $amountPlanned): void
    {
        $this->amountPlanned = $amountPlanned;
    }

    /**
     * @param ?PaymentMethodInfoDraft $paymentMethodInfo
     */
    public function setPaymentMethodInfo(?PaymentMethodInfoDraft $paymentMethodInfo): void
    {
        $this->paymentMethodInfo = $paymentMethodInfo;
    }

    /**
     * @param ?PaymentStatusDraft $paymentStatus
     */
    public function setPaymentStatus(?PaymentStatusDraft $paymentStatus): void
    {
        $this->paymentStatus = $paymentStatus;
    }

    /**
     * @param ?TransactionDraftCollection $transactions
     */
    public function setTransactions(?TransactionDraftCollection $transactions): void
    {
        $this->transactions = $transactions;
    }

    /**
     * @param ?CustomFieldsDraftCollection $interfaceInteractions
     */
    public function setInterfaceInteractions(?CustomFieldsDraftCollection $interfaceInteractions): void
    {
        $this->interfaceInteractions = $interfaceInteractions;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }
}
