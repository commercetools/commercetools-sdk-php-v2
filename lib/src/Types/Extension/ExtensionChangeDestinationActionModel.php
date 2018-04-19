<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Extension\ExtensionUpdateActionModel;

class ExtensionChangeDestinationActionModel extends ExtensionUpdateActionModel implements ExtensionChangeDestinationAction
{
    const DISCRIMINATOR_VALUE = 'changeDestination';

    /**
     * @var ExtensionDestination
     */
    protected $destination;

    /**
     * @return ExtensionDestination
     */
    public function getDestination()
    {
        if (is_null($this->destination)) {
            $value = $this->raw(ExtensionChangeDestinationAction::FIELD_DESTINATION);
            $resolvedClass = $this->resolveDiscriminator(ExtensionDestination::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->destination = $value;
        }
        return $this->destination;
    }

    /**
     * @param ExtensionDestination $destination
     * @return $this
     */
    public function setDestination(ExtensionDestination $destination)
    {
        $this->destination = $destination;

        return $this;
    }

}
