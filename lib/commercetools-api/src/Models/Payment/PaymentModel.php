<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByModel;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByModel;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyModel;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceModel;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsCollection;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

final class PaymentModel extends JsonObjectModel implements Payment
{
    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?int
     */
    protected $version;

    /**
     * @var ?CreatedBy
     */
    protected $createdBy;

    /**
     * @var ?LastModifiedBy
     */
    protected $lastModifiedBy;

    /**
     * @var ?TypedMoney
     */
    protected $amountAuthorized;

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
     * @var ?string
     */
    protected $authorizedUntil;

    /**
     * @var ?string
     */
    protected $externalId;

    /**
     * @var ?TransactionCollection
     */
    protected $transactions;

    /**
     * @var ?TypedMoney
     */
    protected $amountPaid;

    /**
     * @var ?TypedMoney
     */
    protected $amountRefunded;

    /**
     * @var ?TypedMoney
     */
    protected $amountPlanned;

    /**
     * @var ?CustomFieldsCollection
     */
    protected $interfaceInteractions;

    /**
     * @var ?string
     */
    protected $interfaceId;

    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?PaymentStatus
     */
    protected $paymentStatus;

    /**
     * @var ?CustomerReference
     */
    protected $customer;

    public function __construct(
        DateTimeImmutable $createdAt = null,
        DateTimeImmutable $lastModifiedAt = null,
        string $id = null,
        int $version = null,
        CreatedBy $createdBy = null,
        LastModifiedBy $lastModifiedBy = null,
        TypedMoney $amountAuthorized = null,
        string $anonymousId = null,
        PaymentMethodInfo $paymentMethodInfo = null,
        CustomFields $custom = null,
        string $authorizedUntil = null,
        string $externalId = null,
        TransactionCollection $transactions = null,
        TypedMoney $amountPaid = null,
        TypedMoney $amountRefunded = null,
        TypedMoney $amountPlanned = null,
        CustomFieldsCollection $interfaceInteractions = null,
        string $interfaceId = null,
        string $key = null,
        PaymentStatus $paymentStatus = null,
        CustomerReference $customer = null
    ) {
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->id = $id;
        $this->version = $version;
        $this->createdBy = $createdBy;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->amountAuthorized = $amountAuthorized;
        $this->anonymousId = $anonymousId;
        $this->paymentMethodInfo = $paymentMethodInfo;
        $this->custom = $custom;
        $this->authorizedUntil = $authorizedUntil;
        $this->externalId = $externalId;
        $this->transactions = $transactions;
        $this->amountPaid = $amountPaid;
        $this->amountRefunded = $amountRefunded;
        $this->amountPlanned = $amountPlanned;
        $this->interfaceInteractions = $interfaceInteractions;
        $this->interfaceId = $interfaceId;
        $this->key = $key;
        $this->paymentStatus = $paymentStatus;
        $this->customer = $customer;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(BaseResource::FIELD_CREATED_AT);
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
            $data = $this->raw(BaseResource::FIELD_LAST_MODIFIED_AT);
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
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(BaseResource::FIELD_ID);
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
            $data = $this->raw(BaseResource::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        if (is_null($this->createdBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(LoggedResource::FIELD_CREATED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->createdBy = CreatedByModel::of($data);
        }

        return $this->createdBy;
    }

    /**
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        if (is_null($this->lastModifiedBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(LoggedResource::FIELD_LAST_MODIFIED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->lastModifiedBy = LastModifiedByModel::of($data);
        }

        return $this->lastModifiedBy;
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

    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    public function setCreatedBy(?CreatedBy $createdBy): void
    {
        $this->createdBy = $createdBy;
    }

    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void
    {
        $this->lastModifiedBy = $lastModifiedBy;
    }

    public function setAmountAuthorized(?TypedMoney $amountAuthorized): void
    {
        $this->amountAuthorized = $amountAuthorized;
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

    public function setAuthorizedUntil(?string $authorizedUntil): void
    {
        $this->authorizedUntil = $authorizedUntil;
    }

    public function setExternalId(?string $externalId): void
    {
        $this->externalId = $externalId;
    }

    public function setTransactions(?TransactionCollection $transactions): void
    {
        $this->transactions = $transactions;
    }

    public function setAmountPaid(?TypedMoney $amountPaid): void
    {
        $this->amountPaid = $amountPaid;
    }

    public function setAmountRefunded(?TypedMoney $amountRefunded): void
    {
        $this->amountRefunded = $amountRefunded;
    }

    public function setAmountPlanned(?TypedMoney $amountPlanned): void
    {
        $this->amountPlanned = $amountPlanned;
    }

    public function setInterfaceInteractions(?CustomFieldsCollection $interfaceInteractions): void
    {
        $this->interfaceInteractions = $interfaceInteractions;
    }

    public function setInterfaceId(?string $interfaceId): void
    {
        $this->interfaceId = $interfaceId;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setPaymentStatus(?PaymentStatus $paymentStatus): void
    {
        $this->paymentStatus = $paymentStatus;
    }

    public function setCustomer(?CustomerReference $customer): void
    {
        $this->customer = $customer;
    }

    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[BaseResource::FIELD_CREATED_AT]) && $data[BaseResource::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[BaseResource::FIELD_CREATED_AT] = $data[BaseResource::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[BaseResource::FIELD_LAST_MODIFIED_AT]) && $data[BaseResource::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[BaseResource::FIELD_LAST_MODIFIED_AT] = $data[BaseResource::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }
}
