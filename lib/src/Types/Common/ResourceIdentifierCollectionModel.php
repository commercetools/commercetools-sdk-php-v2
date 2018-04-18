<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ResourceIdentifierCollectionModel extends JsonCollection implements ResourceIdentifierCollection {

    /**
     * @param ResourceIdentifier $value
     * @return ResourceIdentifierCollection
     */
    public function add($value) {
        if (!$value instanceof ResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ResourceIdentifier
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ResourceIdentifier) {
            $data = $this->mapData(ResourceIdentifier::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
