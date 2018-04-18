<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ExtensionDestinationCollectionModel extends JsonCollection implements ExtensionDestinationCollection {

    /**
     * @param ExtensionDestination $value
     * @return ExtensionDestinationCollection
     */
    public function add($value) {
        if (!$value instanceof ExtensionDestination) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ExtensionDestination
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ExtensionDestination) {
            $resolvedClass = $this->resolveDiscriminator(ExtensionDestination::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
