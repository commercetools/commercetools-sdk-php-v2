<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceModel;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByModel;
use Commercetools\Api\Models\Common\LastModifiedBy;

use Commercetools\Api\Models\Common\LastModifiedByModel;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyModel;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceModel;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsCollection;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use DateTimeImmutableModel;
use stdClass;

/**
 * @internal
 */
final class PaymentModel extends JsonObjectModel implements Payment
{
    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?int
     */
    protected $version;

    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**
     * @var ?LastModifiedBy
     */
    protected $lastModifiedBy;

    /**
     * @var ?CreatedBy
     */
    protected $createdBy;

    /**
     * @var ?CustomerReference
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
     * @var ?TypedMoney
     */
    protected $amountPlanned;

    /**
     * @var ?TypedMoney
     */
    protected $amountAuthorized;

    /**
     * @var ?string
     */
    protected $authorizedUntil;

    /**
     * @var ?TypedMoney
     */
    protected $amountPaid;

    /**
     * @var ?TypedMoney
     */
    protected $amountRefunded;

    /**
     * @var ?PaymentMethodInfo
     */
    protected $paymentMethodInfo;

    /**
     * @var ?PaymentStatus
     */
    protected $paymentStatus;

    /**
     * @var ?TransactionCollection
     */
    protected $transactions;

    /**
     * @var ?CustomFieldsCollection
     */
    protected $interfaceInteractions;

    /**
     * @var ?CustomFields
     */
    protected $custom;

    /**
     * @var ?string
     */
    protected $key;


    public function __construct(
        string $id = null,
        int $version = null,
        DateTimeImmutable $createdAt = null,
        DateTimeImmutable $lastModifiedAt = null,
        LastModifiedBy $lastModifiedBy = null,
        CreatedBy $createdBy = null,
        CustomerReference $customer = null,
        string $anonymousId = null,
        string $externalId = null,
        string $interfaceId = null,
        TypedMoney $amountPlanned = null,
        TypedMoney $amountAuthorized = null,
        string $authorizedUntil = null,
        TypedMoney $amountPaid = null,
        TypedMoney $amountRefunded = null,
        PaymentMethodInfo $paymentMethodInfo = null,
        PaymentStatus $paymentStatus = null,
        TransactionCollection $transactions = null,
        CustomFieldsCollection $interfaceInteractions = null,
        CustomFields $custom = null,
        string $key = null
    ) {
        $this->id = $id;
        $this->version = $version;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->createdBy = $createdBy;
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
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Payment::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(Payment::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Payment::FIELD_CREATED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->createdAt = $data;
        }

        return $this->createdAt;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Payment::FIELD_LAST_MODIFIED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->lastModifiedAt = $data;
        }

        return $this->lastModifiedAt;
    }

    /**
     * <p>Present on resources updated after 1/02/2019 except for events not tracked.</p>
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        if (is_null($this->lastModifiedBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Payment::FIELD_LAST_MODIFIED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->lastModifiedBy = LastModifiedByModel::of($data);
        }

        return $this->lastModifiedBy;
    }

    /**
     * <p>Present on resources created after 1/02/2019 except for events not tracked.</p>
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        if (is_null($this->createdBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Payment::FIELD_CREATED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->createdBy = CreatedByModel::of($data);
        }

        return $this->createdBy;
    }

    /**
     * <p>A reference to the customer this payment belongs to.</p>
     *
     * @return null|CustomerReference
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Payment::FIELD_CUSTOMER);
            if (is_null($data)) {
                return null;
            }

            $this->customer = CustomerReferenceModel::of($data);
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
            $data = $this->raw(Payment::FIELD_ANONYMOUS_ID);
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
            $data = $this->raw(Payment::FIELD_EXTERNAL_ID);
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
            $data = $this->raw(Payment::FIELD_INTERFACE_ID);
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
     * @return null|TypedMoney
     */
    public function getAmountPlanned()
    {
        if (is_null($this->amountPlanned)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Payment::FIELD_AMOUNT_PLANNED);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyModel::resolveDiscriminatorClass($data);
            $this->amountPlanned = $className::of($data);
        }

        return $this->amountPlanned;
    }

    /**
     * @return null|TypedMoney
     */
    public function getAmountAuthorized()
    {
        if (is_null($this->amountAuthorized)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Payment::FIELD_AMOUNT_AUTHORIZED);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyModel::resolveDiscriminatorClass($data);
            $this->amountAuthorized = $className::of($data);
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
            $data = $this->raw(Payment::FIELD_AUTHORIZED_UNTIL);
            if (is_null($data)) {
                return null;
            }
            $this->authorizedUntil = (string) $data;
        }

        return $this->authorizedUntil;
    }

    /**
     * @return null|TypedMoney
     */
    public function getAmountPaid()
    {
        if (is_null($this->amountPaid)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Payment::FIELD_AMOUNT_PAID);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyModel::resolveDiscriminatorClass($data);
            $this->amountPaid = $className::of($data);
        }

        return $this->amountPaid;
    }

    /**
     * @return null|TypedMoney
     */
    public function getAmountRefunded()
    {
        if (is_null($this->amountRefunded)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Payment::FIELD_AMOUNT_REFUNDED);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyModel::resolveDiscriminatorClass($data);
            $this->amountRefunded = $className::of($data);
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
            $data = $this->raw(Payment::FIELD_PAYMENT_METHOD_INFO);
            if (is_null($data)) {
                return null;
            }

            $this->paymentMethodInfo = PaymentMethodInfoModel::of($data);
        }

        return $this->paymentMethodInfo;
    }

    /**
     * @return null|PaymentStatus
     */
    public function getPaymentStatus()
    {
        if (is_null($this->paymentStatus)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Payment::FIELD_PAYMENT_STATUS);
            if (is_null($data)) {
                return null;
            }

            $this->paymentStatus = PaymentStatusModel::of($data);
        }

        return $this->paymentStatus;
    }

    /**
     * <p>A list of financial transactions of different TransactionTypes with different TransactionStates.</p>
     *
     * @return null|TransactionCollection
     */
    public function getTransactions()
    {
        if (is_null($this->transactions)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(Payment::FIELD_TRANSACTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->transactions = TransactionCollection::fromArray($data);
        }

        return $this->transactions;
    }

    /**
     * <p>Interface interactions can be requests sent to the PSP, responses received from the PSP or notifications received from the PSP.
     * Some interactions may result in a transaction.
     * If so, the <code>interactionId</code> in the Transaction should be set to match the ID of the PSP for the interaction.
     * Interactions are managed by the PSP integration and are usually neither written nor read by the user facing frontends or other services.</p>
     *
     * @return null|CustomFieldsCollection
     */
    public function getInterfaceInteractions()
    {
        if (is_null($this->interfaceInteractions)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(Payment::FIELD_INTERFACE_INTERACTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->interfaceInteractions = CustomFieldsCollection::fromArray($data);
        }

        return $this->interfaceInteractions;
    }

    /**
     * @return null|CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Payment::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsModel::of($data);
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
            $data = $this->raw(Payment::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void
    {
        $this->lastModifiedBy = $lastModifiedBy;
    }

    public function setCreatedBy(?CreatedBy $createdBy): void
    {
        $this->createdBy = $createdBy;
    }

    public function setCustomer(?CustomerReference $customer): void
    {
        $this->customer = $customer;
    }

    public function setAnonymousId(?string $anonymousId): void
    {
        $this->anonymousId = $anonymousId;
    }

    public function setExternalId(?string $externalId): void
    {
        $this->externalId = $externalId;
    }

    public function setInterfaceId(?string $interfaceId): void
    {
        $this->interfaceId = $interfaceId;
    }

    public function setAmountPlanned(?TypedMoney $amountPlanned): void
    {
        $this->amountPlanned = $amountPlanned;
    }

    public function setAmountAuthorized(?TypedMoney $amountAuthorized): void
    {
        $this->amountAuthorized = $amountAuthorized;
    }

    public function setAuthorizedUntil(?string $authorizedUntil): void
    {
        $this->authorizedUntil = $authorizedUntil;
    }

    public function setAmountPaid(?TypedMoney $amountPaid): void
    {
        $this->amountPaid = $amountPaid;
    }

    public function setAmountRefunded(?TypedMoney $amountRefunded): void
    {
        $this->amountRefunded = $amountRefunded;
    }

    public function setPaymentMethodInfo(?PaymentMethodInfo $paymentMethodInfo): void
    {
        $this->paymentMethodInfo = $paymentMethodInfo;
    }

    public function setPaymentStatus(?PaymentStatus $paymentStatus): void
    {
        $this->paymentStatus = $paymentStatus;
    }

    public function setTransactions(?TransactionCollection $transactions): void
    {
        $this->transactions = $transactions;
    }

    public function setInterfaceInteractions(?CustomFieldsCollection $interfaceInteractions): void
    {
        $this->interfaceInteractions = $interfaceInteractions;
    }

    public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }


    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[Payment::FIELD_CREATED_AT]) && $data[Payment::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[Payment::FIELD_CREATED_AT] = $data[Payment::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[Payment::FIELD_LAST_MODIFIED_AT]) && $data[Payment::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[Payment::FIELD_LAST_MODIFIED_AT] = $data[Payment::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
