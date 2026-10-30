<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurrencePolicy;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface RecurrencePolicy extends BaseResource
{
    public const FIELD_KEY = 'key';
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_SCHEDULE = 'schedule';
    public const FIELD_MIN_DAYS_BETWEEN_ORDERS = 'minDaysBetweenOrders';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';

    /**
     * <p>Unique identifier of the RecurrencePolicy.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the RecurrencePolicy.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>User-defined unique identifier of the RecurrencePolicy.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Name of the RecurrencePolicy.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Description of the RecurrencePolicy.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>Schedule of the RecurrencePolicy.</p>
     *

     * @return null|RecurrencePolicySchedule
     */
    public function getSchedule();

    /**
     * <p>Minimum number of days that must pass since the last Order of a <a href="ctp:api:type:RecurringOrder">Recurring Order</a> before the <a href="ctp:api:type:RecurringOrderRequestOrderNowAction">Request Order Now</a> update action is allowed. If not set, there is no limit.</p>
     * <p>This value does not affect the recurrence schedule. For example, a weekly RecurrencePolicy with a value of <code>30</code> still creates Orders weekly.
     * The time is measured in multiples of 24 hours from <code>lastOrderAt</code> of the Recurring Order, regardless of whether the last Order was created on schedule or early.</p>
     * <p>The limit applies to all Recurring Orders that use this RecurrencePolicy, and changes take effect immediately. It is ignored when the RecurrencePolicy is attached to a Price.</p>
     *

     * @return null|int
     */
    public function getMinDaysBetweenOrders();

    /**
     * <p>Date and time (UTC) the RecurrencePolicy was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>IDs and references that created the RecurrencePolicy.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>Date and time (UTC) the RecurrencePolicy was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>IDs and references that last modified the RecurrencePolicy.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void;

    /**
     * @param ?RecurrencePolicySchedule $schedule
     */
    public function setSchedule(?RecurrencePolicySchedule $schedule): void;

    /**
     * @param ?int $minDaysBetweenOrders
     */
    public function setMinDaysBetweenOrders(?int $minDaysBetweenOrders): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void;

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;
}
