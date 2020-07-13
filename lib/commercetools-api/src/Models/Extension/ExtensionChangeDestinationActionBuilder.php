<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ExtensionChangeDestinationAction>
 */
final class ExtensionChangeDestinationActionBuilder implements Builder
{
    /**
     * @var null|ExtensionDestination|ExtensionDestinationBuilder
     */
    private $destination;

    /**
     * @return null|ExtensionDestination
     */
    public function getDestination()
    {
        return $this->destination instanceof ExtensionDestinationBuilder ? $this->destination->build() : $this->destination;
    }

    /**
     * @param ?ExtensionDestination $destination
     * @return $this
     */
    public function withDestination(?ExtensionDestination $destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDestinationBuilder(?ExtensionDestinationBuilder $destination)
    {
        $this->destination = $destination;

        return $this;
    }

    public function build(): ExtensionChangeDestinationAction
    {
        return new ExtensionChangeDestinationActionModel(
            $this->destination instanceof ExtensionDestinationBuilder ? $this->destination->build() : $this->destination
        );
    }

    public static function of(): ExtensionChangeDestinationActionBuilder
    {
        return new self();
    }
}
