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
     * @var DeliveryFormat|?DeliveryFormatBuilder
     */
    private $format;

    /**
     * @var Destination|?DestinationBuilder
     */
    private $destination;

    /**
     * @var ?ChangeSubscriptionCollection
     */
    private $changes;

    /**
     * @var ?MessageSubscriptionCollection
     */
    private $messages;

    /**
     * @var ?string
     */
    private $key;

    /**
     * @return null|DeliveryFormat
     */
    public function getFormat()
    {
        return $this->format instanceof DeliveryFormatBuilder ? $this->format->build() : $this->format;
    }

    /**
     * @return null|Destination
     */
    public function getDestination()
    {
        return $this->destination instanceof DestinationBuilder ? $this->destination->build() : $this->destination;
    }

    /**
     * @return null|ChangeSubscriptionCollection
     */
    public function getChanges()
    {
        return $this->changes;
    }

    /**
     * @return null|MessageSubscriptionCollection
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
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
    public function withDestination(?Destination $destination)
    {
        $this->destination = $destination;

        return $this;
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
    public function withMessages(?MessageSubscriptionCollection $messages)
    {
        $this->messages = $messages;

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
    public function withFormatBuilder(?DeliveryFormatBuilder $format)
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

    public function build(): SubscriptionDraft
    {
        return new SubscriptionDraftModel(
            ($this->format instanceof DeliveryFormatBuilder ? $this->format->build() : $this->format),
            ($this->destination instanceof DestinationBuilder ? $this->destination->build() : $this->destination),
            $this->changes,
            $this->messages,
            $this->key
        );
    }

    public static function of(): SubscriptionDraftBuilder
    {
        return new self();
    }
}
