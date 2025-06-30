<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class SubscriptionSetEventsActionModel extends JsonObjectModel implements SubscriptionSetEventsAction
{
    public const DISCRIMINATOR_VALUE = 'setEvents';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?EventSubscriptionCollection
     */
    protected $events;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?EventSubscriptionCollection $events = null,
        ?string $action = null
    ) {
        $this->events = $events;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Value to set. Can only be unset if either <code>messages</code> or <code>changes</code> is set.</p>
     *
     *
     * @return null|EventSubscriptionCollection
     */
    public function getEvents()
    {
        if (is_null($this->events)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_EVENTS);
            if (is_null($data)) {
                return null;
            }
            $this->events = EventSubscriptionCollection::fromArray($data);
        }

        return $this->events;
    }


    /**
     * @param ?EventSubscriptionCollection $events
     */
    public function setEvents(?EventSubscriptionCollection $events): void
    {
        $this->events = $events;
    }
}
