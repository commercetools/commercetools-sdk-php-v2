<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurrencePolicy;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface RecurrencePolicyDraft extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_SCHEDULE = 'schedule';
    public const FIELD_MIN_DAYS_BETWEEN_ORDERS = 'minDaysBetweenOrders';

    /**
     * <p>User-defined unique identifier for the RecurrencePolicy.</p>
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
     * <p>Schedule where the recurrence is defined.</p>
     *

     * @return null|RecurrencePolicyScheduleDraft
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
     * @param ?RecurrencePolicyScheduleDraft $schedule
     */
    public function setSchedule(?RecurrencePolicyScheduleDraft $schedule): void;

    /**
     * @param ?int $minDaysBetweenOrders
     */
    public function setMinDaysBetweenOrders(?int $minDaysBetweenOrders): void;
}
