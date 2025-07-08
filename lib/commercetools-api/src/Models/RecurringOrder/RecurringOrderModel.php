<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReference;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReferenceModel;
use Commercetools\Api\Models\Cart\CartReference;
use Commercetools\Api\Models\Cart\CartReferenceModel;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceModel;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByModel;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByModel;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceModel;
use Commercetools\Api\Models\Order\OrderReference;
use Commercetools\Api\Models\Order\OrderReferenceModel;
use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicySchedule;
use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyScheduleModel;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceModel;
use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Api\Models\Store\StoreKeyReferenceModel;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class RecurringOrderModel extends JsonObjectModel implements RecurringOrder
{
    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     *
     * @var ?int
     */
    protected $version;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?CartReference
     */
    protected $cart;

    /**
     *
     * @var ?OrderReference
     */
    protected $originOrder;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $startsAt;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $resumesAt;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $expiresAt;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $lastOrderAt;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $nextOrderAt;

    /**
     *
     * @var ?SkipConfiguration
     */
    protected $skipConfiguration;

    /**
     *
     * @var ?StoreKeyReference
     */
    protected $store;

    /**
     *
     * @var ?BusinessUnitKeyReference
     */
    protected $businessUnit;

    /**
     *
     * @var ?StateReference
     */
    protected $state;

    /**
     *
     * @var ?string
     */
    protected $recurringOrderState;

    /**
     *
     * @var ?RecurrencePolicySchedule
     */
    protected $schedule;

    /**
     *
     * @var ?CustomerReference
     */
    protected $customer;

    /**
     *
     * @var ?string
     */
    protected $customerEmail;

    /**
     *
     * @var ?CustomFields
     */
    protected $custom;

    /**
     *
     * @var ?LastModifiedBy
     */
    protected $lastModifiedBy;

    /**
     *
     * @var ?CreatedBy
     */
    protected $createdBy;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?int $version = null,
        ?DateTimeImmutable $createdAt = null,
        ?DateTimeImmutable $lastModifiedAt = null,
        ?string $key = null,
        ?CartReference $cart = null,
        ?OrderReference $originOrder = null,
        ?DateTimeImmutable $startsAt = null,
        ?DateTimeImmutable $resumesAt = null,
        ?DateTimeImmutable $expiresAt = null,
        ?DateTimeImmutable $lastOrderAt = null,
        ?DateTimeImmutable $nextOrderAt = null,
        ?SkipConfiguration $skipConfiguration = null,
        ?StoreKeyReference $store = null,
        ?BusinessUnitKeyReference $businessUnit = null,
        ?StateReference $state = null,
        ?string $recurringOrderState = null,
        ?RecurrencePolicySchedule $schedule = null,
        ?CustomerReference $customer = null,
        ?string $customerEmail = null,
        ?CustomFields $custom = null,
        ?LastModifiedBy $lastModifiedBy = null,
        ?CreatedBy $createdBy = null
    ) {
        $this->id = $id;
        $this->version = $version;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->key = $key;
        $this->cart = $cart;
        $this->originOrder = $originOrder;
        $this->startsAt = $startsAt;
        $this->resumesAt = $resumesAt;
        $this->expiresAt = $expiresAt;
        $this->lastOrderAt = $lastOrderAt;
        $this->nextOrderAt = $nextOrderAt;
        $this->skipConfiguration = $skipConfiguration;
        $this->store = $store;
        $this->businessUnit = $businessUnit;
        $this->state = $state;
        $this->recurringOrderState = $recurringOrderState;
        $this->schedule = $schedule;
        $this->customer = $customer;
        $this->customerEmail = $customerEmail;
        $this->custom = $custom;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->createdBy = $createdBy;
    }

    /**
     * <p>Unique identifier of the RecurringOrder.</p>
     *
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>Current version of the RecurringOrder.</p>
     *
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * <p>Date and time (UTC) when the RecurringOrder was created.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CREATED_AT);
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
     * <p>Date and time (UTC) when the RecurringOrder was last updated.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_AT);
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
     * <p>User-defined unique identifier of the RecurringOrder.</p>
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
     * <p><a href="ctp:api:type:Reference">Reference</a> to the Cart for a RecurringOrder.
     * The referenced Cart will have the <code>RecurringOrder</code> <a href="ctp:api:type:CartOrigin">CartOrigin</a>.</p>
     *
     *
     * @return null|CartReference
     */
    public function getCart()
    {
        if (is_null($this->cart)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CART);
            if (is_null($data)) {
                return null;
            }

            $this->cart = CartReferenceModel::of($data);
        }

        return $this->cart;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the original <a href="ctp:api:type:Order">Order</a> that generated this RecurringOrder.</p>
     *
     *
     * @return null|OrderReference
     */
    public function getOriginOrder()
    {
        if (is_null($this->originOrder)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ORIGIN_ORDER);
            if (is_null($data)) {
                return null;
            }

            $this->originOrder = OrderReferenceModel::of($data);
        }

        return $this->originOrder;
    }

    /**
     * <p>Date and time (UTC) when the RecurringOrder starts creating new Orders.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getStartsAt()
    {
        if (is_null($this->startsAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_STARTS_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->startsAt = $data;
        }

        return $this->startsAt;
    }

    /**
     * <p>Date and time (UTC) when the RecurringOrder resumes creating Orders after being unpaused.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getResumesAt()
    {
        if (is_null($this->resumesAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_RESUMES_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->resumesAt = $data;
        }

        return $this->resumesAt;
    }

    /**
     * <p>Date and time (UTC) when the RecurringOrder expires.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getExpiresAt()
    {
        if (is_null($this->expiresAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_EXPIRES_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->expiresAt = $data;
        }

        return $this->expiresAt;
    }

    /**
     * <p>Date and time (UTC) when the last Order was created from this RecurringOrder.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getLastOrderAt()
    {
        if (is_null($this->lastOrderAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LAST_ORDER_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->lastOrderAt = $data;
        }

        return $this->lastOrderAt;
    }

    /**
     * <p>Date and time (UTC) when the next Order will be created from this RecurringOrder.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getNextOrderAt()
    {
        if (is_null($this->nextOrderAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NEXT_ORDER_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->nextOrderAt = $data;
        }

        return $this->nextOrderAt;
    }

    /**
     * <p>Information about current and future skips for this RecurringOrder.</p>
     *
     *
     * @return null|SkipConfiguration
     */
    public function getSkipConfiguration()
    {
        if (is_null($this->skipConfiguration)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SKIP_CONFIGURATION);
            if (is_null($data)) {
                return null;
            }
            $className = SkipConfigurationModel::resolveDiscriminatorClass($data);
            $this->skipConfiguration = $className::of($data);
        }

        return $this->skipConfiguration;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to a Store.</p>
     *
     *
     * @return null|StoreKeyReference
     */
    public function getStore()
    {
        if (is_null($this->store)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STORE);
            if (is_null($data)) {
                return null;
            }

            $this->store = StoreKeyReferenceModel::of($data);
        }

        return $this->store;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the Business Unit that the RecurringOrder belongs to.</p>
     *
     *
     * @return null|BusinessUnitKeyReference
     */
    public function getBusinessUnit()
    {
        if (is_null($this->businessUnit)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_BUSINESS_UNIT);
            if (is_null($data)) {
                return null;
            }

            $this->businessUnit = BusinessUnitKeyReferenceModel::of($data);
        }

        return $this->businessUnit;
    }

    /**
     * <p><a href="ctp:api:type:State">State</a> of the RecurringOrder in a custom workflow.</p>
     *
     *
     * @return null|StateReference
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->state = StateReferenceModel::of($data);
        }

        return $this->state;
    }

    /**
     * <p>Current state of the RecurringOrder.</p>
     *
     *
     * @return null|string
     */
    public function getRecurringOrderState()
    {
        if (is_null($this->recurringOrderState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_RECURRING_ORDER_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->recurringOrderState = (string) $data;
        }

        return $this->recurringOrderState;
    }

    /**
     * <p>Schedule of the RecurringOrder.</p>
     *
     *
     * @return null|RecurrencePolicySchedule
     */
    public function getSchedule()
    {
        if (is_null($this->schedule)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SCHEDULE);
            if (is_null($data)) {
                return null;
            }
            $className = RecurrencePolicyScheduleModel::resolveDiscriminatorClass($data);
            $this->schedule = $className::of($data);
        }

        return $this->schedule;
    }

    /**
     * <p>The <a href="ctp:api:type:Customer">Customer</a> that the RecurringOrder belongs to.</p>
     *
     *
     * @return null|CustomerReference
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER);
            if (is_null($data)) {
                return null;
            }

            $this->customer = CustomerReferenceModel::of($data);
        }

        return $this->customer;
    }

    /**
     * <p>Email address of the Customer that the RecurringOrder belongs to.</p>
     *
     *
     * @return null|string
     */
    public function getCustomerEmail()
    {
        if (is_null($this->customerEmail)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CUSTOMER_EMAIL);
            if (is_null($data)) {
                return null;
            }
            $this->customerEmail = (string) $data;
        }

        return $this->customerEmail;
    }

    /**
     * <p>Custom Fields of the RecurringOrder.</p>
     *
     *
     * @return null|CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsModel::of($data);
        }

        return $this->custom;
    }

    /**
     * <p>IDs and references that last modified the RecurringOrder.</p>
     *
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        if (is_null($this->lastModifiedBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->lastModifiedBy = LastModifiedByModel::of($data);
        }

        return $this->lastModifiedBy;
    }

    /**
     * <p>IDs and references that created the RecurringOrder.</p>
     *
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        if (is_null($this->createdBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CREATED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->createdBy = CreatedByModel::of($data);
        }

        return $this->createdBy;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?CartReference $cart
     */
    public function setCart(?CartReference $cart): void
    {
        $this->cart = $cart;
    }

    /**
     * @param ?OrderReference $originOrder
     */
    public function setOriginOrder(?OrderReference $originOrder): void
    {
        $this->originOrder = $originOrder;
    }

    /**
     * @param ?DateTimeImmutable $startsAt
     */
    public function setStartsAt(?DateTimeImmutable $startsAt): void
    {
        $this->startsAt = $startsAt;
    }

    /**
     * @param ?DateTimeImmutable $resumesAt
     */
    public function setResumesAt(?DateTimeImmutable $resumesAt): void
    {
        $this->resumesAt = $resumesAt;
    }

    /**
     * @param ?DateTimeImmutable $expiresAt
     */
    public function setExpiresAt(?DateTimeImmutable $expiresAt): void
    {
        $this->expiresAt = $expiresAt;
    }

    /**
     * @param ?DateTimeImmutable $lastOrderAt
     */
    public function setLastOrderAt(?DateTimeImmutable $lastOrderAt): void
    {
        $this->lastOrderAt = $lastOrderAt;
    }

    /**
     * @param ?DateTimeImmutable $nextOrderAt
     */
    public function setNextOrderAt(?DateTimeImmutable $nextOrderAt): void
    {
        $this->nextOrderAt = $nextOrderAt;
    }

    /**
     * @param ?SkipConfiguration $skipConfiguration
     */
    public function setSkipConfiguration(?SkipConfiguration $skipConfiguration): void
    {
        $this->skipConfiguration = $skipConfiguration;
    }

    /**
     * @param ?StoreKeyReference $store
     */
    public function setStore(?StoreKeyReference $store): void
    {
        $this->store = $store;
    }

    /**
     * @param ?BusinessUnitKeyReference $businessUnit
     */
    public function setBusinessUnit(?BusinessUnitKeyReference $businessUnit): void
    {
        $this->businessUnit = $businessUnit;
    }

    /**
     * @param ?StateReference $state
     */
    public function setState(?StateReference $state): void
    {
        $this->state = $state;
    }

    /**
     * @param ?string $recurringOrderState
     */
    public function setRecurringOrderState(?string $recurringOrderState): void
    {
        $this->recurringOrderState = $recurringOrderState;
    }

    /**
     * @param ?RecurrencePolicySchedule $schedule
     */
    public function setSchedule(?RecurrencePolicySchedule $schedule): void
    {
        $this->schedule = $schedule;
    }

    /**
     * @param ?CustomerReference $customer
     */
    public function setCustomer(?CustomerReference $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * @param ?string $customerEmail
     */
    public function setCustomerEmail(?string $customerEmail): void
    {
        $this->customerEmail = $customerEmail;
    }

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void
    {
        $this->lastModifiedBy = $lastModifiedBy;
    }

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void
    {
        $this->createdBy = $createdBy;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[RecurringOrder::FIELD_CREATED_AT]) && $data[RecurringOrder::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[RecurringOrder::FIELD_CREATED_AT] = $data[RecurringOrder::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[RecurringOrder::FIELD_LAST_MODIFIED_AT]) && $data[RecurringOrder::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[RecurringOrder::FIELD_LAST_MODIFIED_AT] = $data[RecurringOrder::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[RecurringOrder::FIELD_STARTS_AT]) && $data[RecurringOrder::FIELD_STARTS_AT] instanceof \DateTimeImmutable) {
            $data[RecurringOrder::FIELD_STARTS_AT] = $data[RecurringOrder::FIELD_STARTS_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[RecurringOrder::FIELD_RESUMES_AT]) && $data[RecurringOrder::FIELD_RESUMES_AT] instanceof \DateTimeImmutable) {
            $data[RecurringOrder::FIELD_RESUMES_AT] = $data[RecurringOrder::FIELD_RESUMES_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[RecurringOrder::FIELD_EXPIRES_AT]) && $data[RecurringOrder::FIELD_EXPIRES_AT] instanceof \DateTimeImmutable) {
            $data[RecurringOrder::FIELD_EXPIRES_AT] = $data[RecurringOrder::FIELD_EXPIRES_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[RecurringOrder::FIELD_LAST_ORDER_AT]) && $data[RecurringOrder::FIELD_LAST_ORDER_AT] instanceof \DateTimeImmutable) {
            $data[RecurringOrder::FIELD_LAST_ORDER_AT] = $data[RecurringOrder::FIELD_LAST_ORDER_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[RecurringOrder::FIELD_NEXT_ORDER_AT]) && $data[RecurringOrder::FIELD_NEXT_ORDER_AT] instanceof \DateTimeImmutable) {
            $data[RecurringOrder::FIELD_NEXT_ORDER_AT] = $data[RecurringOrder::FIELD_NEXT_ORDER_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
