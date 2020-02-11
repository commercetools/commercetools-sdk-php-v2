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

final class SubscriptionSetMessagesActionModel extends JsonObjectModel implements SubscriptionSetMessagesAction
{
    public const DISCRIMINATOR_VALUE = 'setMessages';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?MessageSubscriptionCollection
     */
    protected $messages;


    public function __construct(
        MessageSubscriptionCollection $messages = null
    ) {
        $this->messages = $messages;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(SubscriptionUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|MessageSubscriptionCollection
     */
    public function getMessages()
    {
        if (is_null($this->messages)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(SubscriptionSetMessagesAction::FIELD_MESSAGES);
            if (is_null($data)) {
                return null;
            }
            $this->messages = MessageSubscriptionCollection::fromArray($data);
        }

        return $this->messages;
    }

    public function setMessages(?MessageSubscriptionCollection $messages): void
    {
        $this->messages = $messages;
    }
}
