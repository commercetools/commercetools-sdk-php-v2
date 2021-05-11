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
 * @implements Builder<SubscriptionChangeDestinationAction>
 */
final class SubscriptionChangeDestinationActionBuilder implements Builder
{
    /**
     * @var null|Destination|DestinationBuilder
     */
    private $destination;

    /**
     * @return null|Destination
     */
    public function getDestination()
    {
        return $this->destination instanceof DestinationBuilder ? $this->destination->build() : $this->destination;
    }

    /**
     * @param ?Destination $destination
     * @return $this
     */
    public function withDestination(?Destination $destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * @deprecated use withDestination() instead
     * @return $this
     */
    public function withDestinationBuilder(?DestinationBuilder $destination)
    {
        $this->destination = $destination;

        return $this;
    }

    public function build(): SubscriptionChangeDestinationAction
    {
        return new SubscriptionChangeDestinationActionModel(
            $this->destination instanceof DestinationBuilder ? $this->destination->build() : $this->destination
        );
    }

    public static function of(): SubscriptionChangeDestinationActionBuilder
    {
        return new self();
    }
}
