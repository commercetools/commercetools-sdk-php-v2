<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<SubscriptionSetEventsAction>
 */
final class SubscriptionSetEventsActionBuilder implements Builder
{
    /**

     * @var ?EventSubscriptionCollection
     */
    private $events;

    /**
     * <p>Value to set. Can only be unset if either <code>messages</code> or <code>changes</code> is set.</p>
     *

     * @return null|EventSubscriptionCollection
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param ?EventSubscriptionCollection $events
     * @return $this
     */
    public function withEvents(?EventSubscriptionCollection $events)
    {
        $this->events = $events;

        return $this;
    }


    public function build(): SubscriptionSetEventsAction
    {
        return new SubscriptionSetEventsActionModel(
            $this->events
        );
    }

    public static function of(): SubscriptionSetEventsActionBuilder
    {
        return new self();
    }
}
