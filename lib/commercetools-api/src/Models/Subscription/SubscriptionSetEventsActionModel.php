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
    protected $messages;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?EventSubscriptionCollection $messages = null,
        ?string $action = null
    ) {
        $this->messages = $messages;
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
    public function getMessages()
    {
        if (is_null($this->messages)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_MESSAGES);
            if (is_null($data)) {
                return null;
            }
            $this->messages = EventSubscriptionCollection::fromArray($data);
        }

        return $this->messages;
    }


    /**
     * @param ?EventSubscriptionCollection $messages
     */
    public function setMessages(?EventSubscriptionCollection $messages): void
    {
        $this->messages = $messages;
    }
}
