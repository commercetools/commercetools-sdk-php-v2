<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReference;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReferenceBuilder;
use Commercetools\Api\Models\Cart\CartReference;
use Commercetools\Api\Models\Cart\CartReferenceBuilder;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceBuilder;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByBuilder;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByBuilder;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceBuilder;
use Commercetools\Api\Models\Order\OrderReference;
use Commercetools\Api\Models\Order\OrderReferenceBuilder;
use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicySchedule;
use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyScheduleBuilder;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceBuilder;
use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Api\Models\Store\StoreKeyReferenceBuilder;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<RecurringOrder>
 */
final class RecurringOrderBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var ?int
     */
    private $version;

    /**

     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**

     * @var ?DateTimeImmutable
     */
    private $lastModifiedAt;

    /**

     * @var ?string
     */
    private $key;

    /**

     * @var null|CartReference|CartReferenceBuilder
     */
    private $cart;

    /**

     * @var null|OrderReference|OrderReferenceBuilder
     */
    private $originOrder;

    /**

     * @var ?DateTimeImmutable
     */
    private $startsAt;

    /**

     * @var ?DateTimeImmutable
     */
    private $resumesAt;

    /**

     * @var ?DateTimeImmutable
     */
    private $expiresAt;

    /**

     * @var ?DateTimeImmutable
     */
    private $lastOrderAt;

    /**

     * @var ?DateTimeImmutable
     */
    private $nextOrderAt;

    /**

     * @var null|SkipConfiguration|SkipConfigurationBuilder
     */
    private $skipConfiguration;

    /**

     * @var null|StoreKeyReference|StoreKeyReferenceBuilder
     */
    private $store;

    /**

     * @var null|BusinessUnitKeyReference|BusinessUnitKeyReferenceBuilder
     */
    private $businessUnit;

    /**

     * @var null|StateReference|StateReferenceBuilder
     */
    private $state;

    /**

     * @var ?string
     */
    private $recurringOrderState;

    /**

     * @var null|RecurrencePolicySchedule|RecurrencePolicyScheduleBuilder
     */
    private $schedule;

    /**

     * @var null|CustomerReference|CustomerReferenceBuilder
     */
    private $customer;

    /**

     * @var ?string
     */
    private $customerEmail;

    /**

     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $custom;

    /**

     * @var null|LastModifiedBy|LastModifiedByBuilder
     */
    private $lastModifiedBy;

    /**

     * @var null|CreatedBy|CreatedByBuilder
     */
    private $createdBy;

    /**
     * <p>Unique identifier of the RecurringOrder.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Current version of the RecurringOrder.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Date and time (UTC) when the RecurringOrder was created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p>Date and time (UTC) when the RecurringOrder was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>User-defined unique identifier of the RecurringOrder.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the Cart for a RecurringOrder.
     * The referenced Cart will have the <code>RecurringOrder</code> <a href="ctp:api:type:CartOrigin">CartOrigin</a>.</p>
     *

     * @return null|CartReference
     */
    public function getCart()
    {
        return $this->cart instanceof CartReferenceBuilder ? $this->cart->build() : $this->cart;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the original <a href="ctp:api:type:Order">Order</a> that generated this RecurringOrder.</p>
     *

     * @return null|OrderReference
     */
    public function getOriginOrder()
    {
        return $this->originOrder instanceof OrderReferenceBuilder ? $this->originOrder->build() : $this->originOrder;
    }

    /**
     * <p>Date and time (UTC) when the RecurringOrder starts creating new Orders.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getStartsAt()
    {
        return $this->startsAt;
    }

    /**
     * <p>Date and time (UTC) when the RecurringOrder resumes creating Orders after being unpaused.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getResumesAt()
    {
        return $this->resumesAt;
    }

    /**
     * <p>Date and time (UTC) when the RecurringOrder expires.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * <p>Date and time (UTC) when the last Order was created from this RecurringOrder.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastOrderAt()
    {
        return $this->lastOrderAt;
    }

    /**
     * <p>Date and time (UTC) when the next Order will be created from this RecurringOrder.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getNextOrderAt()
    {
        return $this->nextOrderAt;
    }

    /**
     * <p>Information about current and future skips for this RecurringOrder.</p>
     *

     * @return null|SkipConfiguration
     */
    public function getSkipConfiguration()
    {
        return $this->skipConfiguration instanceof SkipConfigurationBuilder ? $this->skipConfiguration->build() : $this->skipConfiguration;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to a Store.</p>
     *

     * @return null|StoreKeyReference
     */
    public function getStore()
    {
        return $this->store instanceof StoreKeyReferenceBuilder ? $this->store->build() : $this->store;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the Business Unit that the RecurringOrder belongs to.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getBusinessUnit()
    {
        return $this->businessUnit instanceof BusinessUnitKeyReferenceBuilder ? $this->businessUnit->build() : $this->businessUnit;
    }

    /**
     * <p><a href="ctp:api:type:State">State</a> of the RecurringOrder in a custom workflow.</p>
     *

     * @return null|StateReference
     */
    public function getState()
    {
        return $this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state;
    }

    /**
     * <p>Current state of the RecurringOrder.</p>
     *

     * @return null|string
     */
    public function getRecurringOrderState()
    {
        return $this->recurringOrderState;
    }

    /**
     * <p>Schedule of the RecurringOrder.</p>
     *

     * @return null|RecurrencePolicySchedule
     */
    public function getSchedule()
    {
        return $this->schedule instanceof RecurrencePolicyScheduleBuilder ? $this->schedule->build() : $this->schedule;
    }

    /**
     * <p>The <a href="ctp:api:type:Customer">Customer</a> that the RecurringOrder belongs to.</p>
     *

     * @return null|CustomerReference
     */
    public function getCustomer()
    {
        return $this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer;
    }

    /**
     * <p>Email address of the Customer that the RecurringOrder belongs to.</p>
     *

     * @return null|string
     */
    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }

    /**
     * <p>Custom Fields of the RecurringOrder.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * <p>IDs and references that last modified the RecurringOrder.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy;
    }

    /**
     * <p>IDs and references that created the RecurringOrder.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        return $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     * @return $this
     */
    public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;

        return $this;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?CartReference $cart
     * @return $this
     */
    public function withCart(?CartReference $cart)
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * @param ?OrderReference $originOrder
     * @return $this
     */
    public function withOriginOrder(?OrderReference $originOrder)
    {
        $this->originOrder = $originOrder;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $startsAt
     * @return $this
     */
    public function withStartsAt(?DateTimeImmutable $startsAt)
    {
        $this->startsAt = $startsAt;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $resumesAt
     * @return $this
     */
    public function withResumesAt(?DateTimeImmutable $resumesAt)
    {
        $this->resumesAt = $resumesAt;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $expiresAt
     * @return $this
     */
    public function withExpiresAt(?DateTimeImmutable $expiresAt)
    {
        $this->expiresAt = $expiresAt;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $lastOrderAt
     * @return $this
     */
    public function withLastOrderAt(?DateTimeImmutable $lastOrderAt)
    {
        $this->lastOrderAt = $lastOrderAt;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $nextOrderAt
     * @return $this
     */
    public function withNextOrderAt(?DateTimeImmutable $nextOrderAt)
    {
        $this->nextOrderAt = $nextOrderAt;

        return $this;
    }

    /**
     * @param ?SkipConfiguration $skipConfiguration
     * @return $this
     */
    public function withSkipConfiguration(?SkipConfiguration $skipConfiguration)
    {
        $this->skipConfiguration = $skipConfiguration;

        return $this;
    }

    /**
     * @param ?StoreKeyReference $store
     * @return $this
     */
    public function withStore(?StoreKeyReference $store)
    {
        $this->store = $store;

        return $this;
    }

    /**
     * @param ?BusinessUnitKeyReference $businessUnit
     * @return $this
     */
    public function withBusinessUnit(?BusinessUnitKeyReference $businessUnit)
    {
        $this->businessUnit = $businessUnit;

        return $this;
    }

    /**
     * @param ?StateReference $state
     * @return $this
     */
    public function withState(?StateReference $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @param ?string $recurringOrderState
     * @return $this
     */
    public function withRecurringOrderState(?string $recurringOrderState)
    {
        $this->recurringOrderState = $recurringOrderState;

        return $this;
    }

    /**
     * @param ?RecurrencePolicySchedule $schedule
     * @return $this
     */
    public function withSchedule(?RecurrencePolicySchedule $schedule)
    {
        $this->schedule = $schedule;

        return $this;
    }

    /**
     * @param ?CustomerReference $customer
     * @return $this
     */
    public function withCustomer(?CustomerReference $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @param ?string $customerEmail
     * @return $this
     */
    public function withCustomerEmail(?string $customerEmail)
    {
        $this->customerEmail = $customerEmail;

        return $this;
    }

    /**
     * @param ?CustomFields $custom
     * @return $this
     */
    public function withCustom(?CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     * @return $this
     */
    public function withLastModifiedBy(?LastModifiedBy $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @param ?CreatedBy $createdBy
     * @return $this
     */
    public function withCreatedBy(?CreatedBy $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @deprecated use withCart() instead
     * @return $this
     */
    public function withCartBuilder(?CartReferenceBuilder $cart)
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * @deprecated use withOriginOrder() instead
     * @return $this
     */
    public function withOriginOrderBuilder(?OrderReferenceBuilder $originOrder)
    {
        $this->originOrder = $originOrder;

        return $this;
    }

    /**
     * @deprecated use withSkipConfiguration() instead
     * @return $this
     */
    public function withSkipConfigurationBuilder(?SkipConfigurationBuilder $skipConfiguration)
    {
        $this->skipConfiguration = $skipConfiguration;

        return $this;
    }

    /**
     * @deprecated use withStore() instead
     * @return $this
     */
    public function withStoreBuilder(?StoreKeyReferenceBuilder $store)
    {
        $this->store = $store;

        return $this;
    }

    /**
     * @deprecated use withBusinessUnit() instead
     * @return $this
     */
    public function withBusinessUnitBuilder(?BusinessUnitKeyReferenceBuilder $businessUnit)
    {
        $this->businessUnit = $businessUnit;

        return $this;
    }

    /**
     * @deprecated use withState() instead
     * @return $this
     */
    public function withStateBuilder(?StateReferenceBuilder $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @deprecated use withSchedule() instead
     * @return $this
     */
    public function withScheduleBuilder(?RecurrencePolicyScheduleBuilder $schedule)
    {
        $this->schedule = $schedule;

        return $this;
    }

    /**
     * @deprecated use withCustomer() instead
     * @return $this
     */
    public function withCustomerBuilder(?CustomerReferenceBuilder $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @deprecated use withLastModifiedBy() instead
     * @return $this
     */
    public function withLastModifiedByBuilder(?LastModifiedByBuilder $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @deprecated use withCreatedBy() instead
     * @return $this
     */
    public function withCreatedByBuilder(?CreatedByBuilder $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    public function build(): RecurringOrder
    {
        return new RecurringOrderModel(
            $this->id,
            $this->version,
            $this->createdAt,
            $this->lastModifiedAt,
            $this->key,
            $this->cart instanceof CartReferenceBuilder ? $this->cart->build() : $this->cart,
            $this->originOrder instanceof OrderReferenceBuilder ? $this->originOrder->build() : $this->originOrder,
            $this->startsAt,
            $this->resumesAt,
            $this->expiresAt,
            $this->lastOrderAt,
            $this->nextOrderAt,
            $this->skipConfiguration instanceof SkipConfigurationBuilder ? $this->skipConfiguration->build() : $this->skipConfiguration,
            $this->store instanceof StoreKeyReferenceBuilder ? $this->store->build() : $this->store,
            $this->businessUnit instanceof BusinessUnitKeyReferenceBuilder ? $this->businessUnit->build() : $this->businessUnit,
            $this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state,
            $this->recurringOrderState,
            $this->schedule instanceof RecurrencePolicyScheduleBuilder ? $this->schedule->build() : $this->schedule,
            $this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer,
            $this->customerEmail,
            $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom,
            $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy,
            $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy
        );
    }

    public static function of(): RecurringOrderBuilder
    {
        return new self();
    }
}
