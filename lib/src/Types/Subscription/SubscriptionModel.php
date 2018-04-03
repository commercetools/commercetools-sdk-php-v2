<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Common\ResourceModel;

use Commercetools\Builder\SubscriptionUpdateBuilder;
use Commercetools\Types\Common\Resource;

class SubscriptionModel extends ResourceModel implements Subscription {
    /**
     * @var ChangeSubscriptionCollection
     */
    protected $changes;
    /**
     * @var Destination
     */
    protected $destination;
    /**
     * @var string
     */
    protected $key;
    /**
     * @var MessageSubscriptionCollection
     */
    protected $messages;

    /**
     * @return ChangeSubscriptionCollection
     */
    public function getChanges()
    {
        if (is_null($this->changes)) {
            $value = $this->raw(Subscription::FIELD_CHANGES);
            if (is_null($value)) {
                return $this->mapData(ChangeSubscriptionCollection::class, null);
            }
            $value = $this->mapData(ChangeSubscriptionCollection::class, $value);
            $this->changes = $value;
        }
        return $this->changes;
    }
    /**
     * @return Destination
     */
    public function getDestination()
    {
        if (is_null($this->destination)) {
            $value = $this->raw(Subscription::FIELD_DESTINATION);
            $resolvedClass = $this->resolveDiscriminator(Destination::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->destination = $value;
        }
        return $this->destination;
    }
    /**
     * @return string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            $value = $this->raw(Subscription::FIELD_KEY);
            $value = (string)$value;
            $this->key = $value;
        }
        return $this->key;
    }
    /**
     * @return MessageSubscriptionCollection
     */
    public function getMessages()
    {
        if (is_null($this->messages)) {
            $value = $this->raw(Subscription::FIELD_MESSAGES);
            if (is_null($value)) {
                return $this->mapData(MessageSubscriptionCollection::class, null);
            }
            $value = $this->mapData(MessageSubscriptionCollection::class, $value);
            $this->messages = $value;
        }
        return $this->messages;
    }

    /**
     * @param ChangeSubscriptionCollection $changes
     * @return $this
     */
    public function setChanges(ChangeSubscriptionCollection $changes)
    {
        $this->changes = $changes;

        return $this;
    }
    /**
     * @param Destination $destination
     * @return $this
     */
    public function setDestination(Destination $destination)
    {
        $this->destination = $destination;

        return $this;
    }
    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key)
    {
        $this->key = (string)$key;

        return $this;
    }
    /**
     * @param MessageSubscriptionCollection $messages
     * @return $this
     */
    public function setMessages(MessageSubscriptionCollection $messages)
    {
        $this->messages = $messages;

        return $this;
    }


    /**
     * @return SubscriptionUpdateBuilder
     */
    public function update()
    {
        $builder = new SubscriptionUpdateBuilder();
        $builder->setMapper($this->getMapper());
        $builder->with($this);
        return $builder;
    }
}
