<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurrencePolicy;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<RecurrencePolicyDraft>
 */
final class RecurrencePolicyDraftBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $description;

    /**

     * @var null|RecurrencePolicyScheduleDraft|RecurrencePolicyScheduleDraftBuilder
     */
    private $schedule;

    /**

     * @var ?int
     */
    private $minDaysBetweenOrders;

    /**
     * <p>User-defined unique identifier for the RecurrencePolicy.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Name of the RecurrencePolicy.</p>
     *

     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * <p>Description of the RecurrencePolicy.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription()
    {
        return $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description;
    }

    /**
     * <p>Schedule where the recurrence is defined.</p>
     *

     * @return null|RecurrencePolicyScheduleDraft
     */
    public function getSchedule()
    {
        return $this->schedule instanceof RecurrencePolicyScheduleDraftBuilder ? $this->schedule->build() : $this->schedule;
    }

    /**
     * <p>Minimum number of days that must pass since the last Order of a <a href="ctp:api:type:RecurringOrder">Recurring Order</a> before the <a href="ctp:api:type:RecurringOrderRequestOrderNowAction">Request Order Now</a> update action is allowed. If not set, there is no limit.</p>
     * <p>This value does not affect the recurrence schedule. For example, a weekly RecurrencePolicy with a value of <code>30</code> still creates Orders weekly.
     * The time is measured in multiples of 24 hours from <code>lastOrderAt</code> of the Recurring Order, regardless of whether the last Order was created on schedule or early.</p>
     * <p>The limit applies to all Recurring Orders that use this RecurrencePolicy, and changes take effect immediately. It is ignored when the RecurrencePolicy is attached to a Price.</p>
     *

     * @return null|int
     */
    public function getMinDaysBetweenOrders()
    {
        return $this->minDaysBetweenOrders;
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
     * @param ?LocalizedString $name
     * @return $this
     */
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?LocalizedString $description
     * @return $this
     */
    public function withDescription(?LocalizedString $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param ?RecurrencePolicyScheduleDraft $schedule
     * @return $this
     */
    public function withSchedule(?RecurrencePolicyScheduleDraft $schedule)
    {
        $this->schedule = $schedule;

        return $this;
    }

    /**
     * @param ?int $minDaysBetweenOrders
     * @return $this
     */
    public function withMinDaysBetweenOrders(?int $minDaysBetweenOrders)
    {
        $this->minDaysBetweenOrders = $minDaysBetweenOrders;

        return $this;
    }

    /**
     * @deprecated use withName() instead
     * @return $this
     */
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @deprecated use withDescription() instead
     * @return $this
     */
    public function withDescriptionBuilder(?LocalizedStringBuilder $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @deprecated use withSchedule() instead
     * @return $this
     */
    public function withScheduleBuilder(?RecurrencePolicyScheduleDraftBuilder $schedule)
    {
        $this->schedule = $schedule;

        return $this;
    }

    public function build(): RecurrencePolicyDraft
    {
        return new RecurrencePolicyDraftModel(
            $this->key,
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description,
            $this->schedule instanceof RecurrencePolicyScheduleDraftBuilder ? $this->schedule->build() : $this->schedule,
            $this->minDaysBetweenOrders
        );
    }

    public static function of(): RecurrencePolicyDraftBuilder
    {
        return new self();
    }
}
