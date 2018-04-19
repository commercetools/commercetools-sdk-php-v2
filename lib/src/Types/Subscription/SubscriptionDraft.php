<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Base\JsonObject;

interface SubscriptionDraft extends JsonObject
{
    const FIELD_CHANGES = 'changes';
    const FIELD_DESTINATION = 'destination';
    const FIELD_KEY = 'key';
    const FIELD_MESSAGES = 'messages';

    /**
     * @return ChangeSubscriptionCollection
     */
    public function getChanges();

    /**
     * @return Destination
     */
    public function getDestination();

    /**
     * @return string
     */
    public function getKey();

    /**
     * @return MessageSubscriptionCollection
     */
    public function getMessages();

    /**
     * @param ChangeSubscriptionCollection $changes
     * @return $this
     */
    public function setChanges(ChangeSubscriptionCollection $changes);

    /**
     * @param Destination $destination
     * @return $this
     */
    public function setDestination(Destination $destination);

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

    /**
     * @param MessageSubscriptionCollection $messages
     * @return $this
     */
    public function setMessages(MessageSubscriptionCollection $messages);

}
