<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ResourceNotFoundErrorCollectionModel extends ErrorObjectCollectionModel implements ResourceNotFoundErrorCollection {

    /**
     * @param ResourceNotFoundError $value
     * @return ResourceNotFoundErrorCollection
     */
    public function add($value) {
        if (!$value instanceof ResourceNotFoundError) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ResourceNotFoundError
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ResourceNotFoundError) {
            $data = $this->mapData(ResourceNotFoundError::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
