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
final class SubscriptionSetMessagesActionModel extends JsonObjectModel implements SubscriptionSetMessagesAction
{
    public const DISCRIMINATOR_VALUE = 'setMessages';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?MessageSubscriptionCollection
     */
    protected $messages;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?MessageSubscriptionCollection $messages = null,
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
     * <p>Value to set. Can only be unset if <code>changes</code> is set.</p>
     *
     *
     * @return null|MessageSubscriptionCollection
     */
    public function getMessages()
    {
        if (is_null($this->messages)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_MESSAGES);
            if (is_null($data)) {
                return null;
            }
            $this->messages = MessageSubscriptionCollection::fromArray($data);
        }

        return $this->messages;
    }


    /**
     * @param ?MessageSubscriptionCollection $messages
     */
    public function setMessages(?MessageSubscriptionCollection $messages): void
    {
        $this->messages = $messages;
    }
}
