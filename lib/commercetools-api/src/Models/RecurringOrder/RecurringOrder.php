<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReference;
use Commercetools\Api\Models\Cart\CartReference;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Order\OrderReference;
use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicySchedule;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface RecurringOrder extends BaseResource
{
    public const FIELD_KEY = 'key';
    public const FIELD_CART = 'cart';
    public const FIELD_ORIGIN_ORDER = 'originOrder';
    public const FIELD_STARTS_AT = 'startsAt';
    public const FIELD_RESUMES_AT = 'resumesAt';
    public const FIELD_EXPIRES_AT = 'expiresAt';
    public const FIELD_LAST_ORDER_AT = 'lastOrderAt';
    public const FIELD_NEXT_ORDER_AT = 'nextOrderAt';
    public const FIELD_SKIP_CONFIGURATION = 'skipConfiguration';
    public const FIELD_STORE = 'store';
    public const FIELD_BUSINESS_UNIT = 'businessUnit';
    public const FIELD_STATE = 'state';
    public const FIELD_RECURRING_ORDER_STATE = 'recurringOrderState';
    public const FIELD_SCHEDULE = 'schedule';
    public const FIELD_CUSTOMER = 'customer';
    public const FIELD_CUSTOMER_EMAIL = 'customerEmail';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';

    /**
     * <p>Unique identifier of the RecurringOrder.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>User-defined unique identifier of the RecurringOrder.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Current version of the RecurringOrder.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the Cart for a RecurringOrder.
     * The referenced Cart will have the <code>RecurringOrder</code> <a href="ctp:api:type:CartOrigin">CartOrigin</a>.</p>
     *

     * @return null|CartReference
     */
    public function getCart();

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the original <a href="ctp:api:type:Order">Order</a> that generated this RecurringOrder.</p>
     *

     * @return null|OrderReference
     */
    public function getOriginOrder();

    /**
     * <p>Date and time (UTC) when the RecurringOrder starts creating new Orders.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getStartsAt();

    /**
     * <p>Date and time (UTC) when the RecurringOrder resumes creating Orders after being unpaused.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getResumesAt();

    /**
     * <p>Date and time (UTC) when the RecurringOrder expires.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getExpiresAt();

    /**
     * <p>Date and time (UTC) when the last Order was created from this RecurringOrder.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastOrderAt();

    /**
     * <p>Date and time (UTC) when the next Order will be created from this RecurringOrder.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getNextOrderAt();

    /**
     * <p>Information about current and future skips for this RecurringOrder.</p>
     *

     * @return null|SkipConfiguration
     */
    public function getSkipConfiguration();

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to a Store.</p>
     *

     * @return null|StoreKeyReference
     */
    public function getStore();

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the Business Unit that the RecurringOrder belongs to.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getBusinessUnit();

    /**
     * <p><a href="ctp:api:type:State">State</a> of the RecurringOrder in a custom workflow.</p>
     *

     * @return null|StateReference
     */
    public function getState();

    /**
     * <p>Current state of the RecurringOrder.</p>
     *

     * @return null|string
     */
    public function getRecurringOrderState();

    /**
     * <p>Schedule of the RecurringOrder.</p>
     *

     * @return null|RecurrencePolicySchedule
     */
    public function getSchedule();

    /**
     * <p>The <a href="ctp:api:type:Customer">Customer</a> that the RecurringOrder belongs to.</p>
     *

     * @return null|CustomerReference
     */
    public function getCustomer();

    /**
     * <p>Email address of the Customer that the RecurringOrder belongs to.</p>
     *

     * @return null|string
     */
    public function getCustomerEmail();

    /**
     * <p>Custom Fields of the RecurringOrder.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * <p>Date and time (UTC) when the RecurringOrder was created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) when the RecurringOrder was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>IDs and references that last modified the RecurringOrder.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>IDs and references that created the RecurringOrder.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?CartReference $cart
     */
    public function setCart(?CartReference $cart): void;

    /**
     * @param ?OrderReference $originOrder
     */
    public function setOriginOrder(?OrderReference $originOrder): void;

    /**
     * @param ?DateTimeImmutable $startsAt
     */
    public function setStartsAt(?DateTimeImmutable $startsAt): void;

    /**
     * @param ?DateTimeImmutable $resumesAt
     */
    public function setResumesAt(?DateTimeImmutable $resumesAt): void;

    /**
     * @param ?DateTimeImmutable $expiresAt
     */
    public function setExpiresAt(?DateTimeImmutable $expiresAt): void;

    /**
     * @param ?DateTimeImmutable $lastOrderAt
     */
    public function setLastOrderAt(?DateTimeImmutable $lastOrderAt): void;

    /**
     * @param ?DateTimeImmutable $nextOrderAt
     */
    public function setNextOrderAt(?DateTimeImmutable $nextOrderAt): void;

    /**
     * @param ?SkipConfiguration $skipConfiguration
     */
    public function setSkipConfiguration(?SkipConfiguration $skipConfiguration): void;

    /**
     * @param ?StoreKeyReference $store
     */
    public function setStore(?StoreKeyReference $store): void;

    /**
     * @param ?BusinessUnitKeyReference $businessUnit
     */
    public function setBusinessUnit(?BusinessUnitKeyReference $businessUnit): void;

    /**
     * @param ?StateReference $state
     */
    public function setState(?StateReference $state): void;

    /**
     * @param ?string $recurringOrderState
     */
    public function setRecurringOrderState(?string $recurringOrderState): void;

    /**
     * @param ?RecurrencePolicySchedule $schedule
     */
    public function setSchedule(?RecurrencePolicySchedule $schedule): void;

    /**
     * @param ?CustomerReference $customer
     */
    public function setCustomer(?CustomerReference $customer): void;

    /**
     * @param ?string $customerEmail
     */
    public function setCustomerEmail(?string $customerEmail): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void;
}
