<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;

/**
 * @implements Builder<SubscriptionDraft>
 */
final class SubscriptionDraftBuilder implements Builder
{
    /**
     * @var ?ChangeSubscriptionCollection
     */
    private $changes;

    /**
     * @var Destination|?DestinationBuilder
     */
    private $destination;

    /**
     * @var ?string
     */
    private $key;

    /**
     * @var ?MessageSubscriptionCollection
     */
    private $messages;

    /**
     * @var DeliveryFormat|?DeliveryFormatBuilder
     */
    private $format;

    /**
     * @return null|ChangeSubscriptionCollection
     */
    public function getChanges()
    {
        return $this->changes;
    }

    /**
     * @return null|Destination
     */
    public function getDestination()
    {
        return $this->destination instanceof DestinationBuilder ? $this->destination->build() : $this->destination;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return null|MessageSubscriptionCollection
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @return null|DeliveryFormat
     */
    public function getFormat()
    {
        return $this->format instanceof DeliveryFormatBuilder ? $this->format->build() : $this->format;
    }

    /**
     * @return $this
     */
    public function withChanges(?ChangeSubscriptionCollection $changes)
    {
        $this->changes = $changes;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDestination(?Destination $destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMessages(?MessageSubscriptionCollection $messages)
    {
        $this->messages = $messages;

        return $this;
    }

    /**
     * @return $this
     */
    public function withFormat(?DeliveryFormat $format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDestinationBuilder(?DestinationBuilder $destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * @return $this
     */
    public function withFormatBuilder(?DeliveryFormatBuilder $format)
    {
        $this->format = $format;

        return $this;
    }

    public function build(): SubscriptionDraft
    {
        return new SubscriptionDraftModel(
            $this->changes,
            ($this->destination instanceof DestinationBuilder ? $this->destination->build() : $this->destination),
            $this->key,
            $this->messages,
            ($this->format instanceof DeliveryFormatBuilder ? $this->format->build() : $this->format)
        );
    }

    public static function of(): SubscriptionDraftBuilder
    {
        return new self();
    }
}
