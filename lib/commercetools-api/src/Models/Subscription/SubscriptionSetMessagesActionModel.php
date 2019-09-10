<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class SubscriptionSetMessagesActionModel extends JsonObjectModel implements SubscriptionSetMessagesAction
{
    const DISCRIMINATOR_VALUE = 'setMessages';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?MessageSubscriptionCollection
     */
    protected $messages;

    public function __construct(
        string $action = null,
        MessageSubscriptionCollection $messages = null
    ) {
        $this->action = $action;
        $this->messages = $messages;
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

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setMessages(?MessageSubscriptionCollection $messages): void
    {
        $this->messages = $messages;
    }
}
