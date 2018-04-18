<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Types\UpdateCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ExtensionUpdateCollectionModel extends UpdateCollectionModel implements ExtensionUpdateCollection {

    /**
     * @param ExtensionUpdate $value
     * @return ExtensionUpdateCollection
     */
    public function add($value) {
        if (!$value instanceof ExtensionUpdate) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ExtensionUpdate
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ExtensionUpdate) {
            $data = $this->mapData(ExtensionUpdate::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
