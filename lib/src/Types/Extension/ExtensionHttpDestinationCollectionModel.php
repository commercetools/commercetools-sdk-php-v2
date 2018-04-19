<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Types\Extension\ExtensionDestinationCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ExtensionHttpDestinationCollectionModel extends ExtensionDestinationCollectionModel implements ExtensionHttpDestinationCollection
{

    /**
     * @param ExtensionHttpDestination $value
     * @return ExtensionHttpDestinationCollection
     */
    public function add($value) {
        if (!$value instanceof ExtensionHttpDestination) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ExtensionHttpDestination
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ExtensionHttpDestination) {
            $data = $this->mapData(ExtensionHttpDestination::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
