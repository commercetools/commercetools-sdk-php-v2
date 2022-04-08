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
     * @var ?CustomerResourceIdentifier
     */
    protected $customer;

    /**
     * @var ?string
     */
    protected $anonymousId;

    /**
     * @var ?string
     */
    protected $externalId;

    /**
     * @var ?string
     */
    protected $interfaceId;

    /**
     * @var ?Money
     */
    protected $amountPlanned;

    /**
     * @var ?Money
     */
    protected $amountAuthorized;

    /**
     * @var ?string
     */
    protected $authorizedUntil;

    /**
     * @var ?Money
     */
    protected $amountPaid;

    /**
     * @var ?Money
     */
    protected $amountRefunded;

    /**
     * @var ?PaymentMethodInfo
     */
    protected $paymentMethodInfo;

    /**
     * @var ?PaymentStatusDraft
     */
    protected $paymentStatus;

    /**
     * @var ?TransactionDraftCollection
     */
    protected $transactions;

    /**
     * @var ?CustomFieldsDraftCollection
     */
    protected $interfaceInteractions;

    /**
     * @var ?CustomFieldsDraft
     */
    protected $custom;

    /**
     * @var ?string
     */
    protected $key;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CustomerResourceIdentifier $customer = null,
        ?string $anonymousId = null,
        ?string $externalId = null,
        ?string $interfaceId = null,
        ?Money $amountPlanned = null,
        ?Money $amountAuthorized = null,
        ?string $authorizedUntil = null,
        ?Money $amountPaid = null,
        ?Money $amountRefunded = null,
        ?PaymentMethodInfo $paymentMethodInfo = null,
        ?PaymentStatusDraft $paymentStatus = null,
        ?TransactionDraftCollection $transactions = null,
        ?CustomFieldsDraftCollection $interfaceInteractions = null,
        ?CustomFieldsDraft $custom = null,
        ?string $key = null
    ) {
        $this->customer = $customer;
        $this->anonymousId = $anonymousId;
        $this->externalId = $externalId;
        $this->interfaceId = $interfaceId;
        $this->amountPlanned = $amountPlanned;
        $this->amountAuthorized = $amountAuthorized;
        $this->authorizedUntil = $authorizedUntil;
        $this->amountPaid = $amountPaid;
        $this->amountRefunded = $amountRefunded;
        $this->paymentMethodInfo = $paymentMethodInfo;
        $this->paymentStatus = $paymentStatus;
        $this->transactions = $transactions;
        $this->interfaceInteractions = $interfaceInteractions;
        $this->custom = $custom;
        $this->key = $key;
    }

    /**
     * <p>A reference to the customer this payment belongs to.</p>
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
     * <p>Identifies payments belonging to an anonymous session (the customer has not signed up/in yet).</p>
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
     * @return null|string
     */
    public function getExternalId()
    {
        if (is_null($this->externalId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_EXTERNAL_ID);
            if (is_null($data)) {
                return null;
            }
            $this->externalId = (string) $data;
        }

        return $this->externalId;
    }

    /**
     * <p>The identifier that is used by the interface that manages the payment (usually the PSP).
     * Cannot be changed once it has been set.
     * The combination of this ID and the PaymentMethodInfo <code>paymentInterface</code> must be unique.</p>
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
     * <p>How much money this payment intends to receive from the customer.
     * The value usually matches the cart or order gross total.</p>
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
     * <p>Draft type that stores amounts in cent precision for the specified currency.
     * For storing money values in fractions of the minor unit in a currency, use <a href="ctp:api:type:HighPrecisionMoneyDraft">HighPrecisionMoneyDraft</a> instead.</p>
     *
     * @return null|Money
     */
    public function getAmountAuthorized()
    {
        if (is_null($this->amountAuthorized)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_AMOUNT_AUTHORIZED);
            if (is_null($data)) {
                return null;
            }

            $this->amountAuthorized = MoneyModel::of($data);
        }

        return $this->amountAuthorized;
    }

    /**
     * @return null|string
     */
    public function getAuthorizedUntil()
    {
        if (is_null($this->authorizedUntil)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_AUTHORIZED_UNTIL);
            if (is_null($data)) {
                return null;
            }
            $this->authorizedUntil = (string) $data;
        }

        return $this->authorizedUntil;
    }

    /**
     * <p>Draft type that stores amounts in cent precision for the specified currency.
     * For storing money values in fractions of the minor unit in a currency, use <a href="ctp:api:type:HighPrecisionMoneyDraft">HighPrecisionMoneyDraft</a> instead.</p>
     *
     * @return null|Money
     */
    public function getAmountPaid()
    {
        if (is_null($this->amountPaid)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_AMOUNT_PAID);
            if (is_null($data)) {
                return null;
            }

            $this->amountPaid = MoneyModel::of($data);
        }

        return $this->amountPaid;
    }

    /**
     * <p>Draft type that stores amounts in cent precision for the specified currency.
     * For storing money values in fractions of the minor unit in a currency, use <a href="ctp:api:type:HighPrecisionMoneyDraft">HighPrecisionMoneyDraft</a> instead.</p>
     *
     * @return null|Money
     */
    public function getAmountRefunded()
    {
        if (is_null($this->amountRefunded)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_AMOUNT_REFUNDED);
            if (is_null($data)) {
                return null;
            }

            $this->amountRefunded = MoneyModel::of($data);
        }

        return $this->amountRefunded;
    }

    /**
     * @return null|PaymentMethodInfo
     */
    public function getPaymentMethodInfo()
    {
        if (is_null($this->paymentMethodInfo)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PAYMENT_METHOD_INFO);
            if (is_null($data)) {
                return null;
            }

            $this->paymentMethodInfo = PaymentMethodInfoModel::of($data);
        }

        return $this->paymentMethodInfo;
    }

    /**
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
     * <p>A list of financial transactions of different TransactionTypes with different TransactionStates.</p>
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
     * <p>Interface interactions can be requests send to the PSP, responses received from the PSP or notifications received from the PSP.
     * Some interactions may result in a transaction.
     * If so, the <code>interactionId</code> in the Transaction should be set to match the ID of the PSP for the interaction.
     * Interactions are managed by the PSP integration and are usually neither written nor read by the user facing frontends or other services.</p>
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
     * <p>User-specific unique identifier for the payment (max.
     * 256 characters).</p>
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
     * @param ?string $externalId
     */
    public function setExternalId(?string $externalId): void
    {
        $this->externalId = $externalId;
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
     * @param ?Money $amountAuthorized
     */
    public function setAmountAuthorized(?Money $amountAuthorized): void
    {
        $this->amountAuthorized = $amountAuthorized;
    }

    /**
     * @param ?string $authorizedUntil
     */
    public function setAuthorizedUntil(?string $authorizedUntil): void
    {
        $this->authorizedUntil = $authorizedUntil;
    }

    /**
     * @param ?Money $amountPaid
     */
    public function setAmountPaid(?Money $amountPaid): void
    {
        $this->amountPaid = $amountPaid;
    }

    /**
     * @param ?Money $amountRefunded
     */
    public function setAmountRefunded(?Money $amountRefunded): void
    {
        $this->amountRefunded = $amountRefunded;
    }

    /**
     * @param ?PaymentMethodInfo $paymentMethodInfo
     */
    public function setPaymentMethodInfo(?PaymentMethodInfo $paymentMethodInfo): void
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
