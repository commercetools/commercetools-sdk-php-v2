<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomObject;

use Commercetools\Types\Common\ReferenceCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomObjectReferenceCollectionModel extends ReferenceCollectionModel implements CustomObjectReferenceCollection
{

    /**
     * @param CustomObjectReference $value
     * @return CustomObjectReferenceCollection
     */
    public function add($value) {
        if (!$value instanceof CustomObjectReference) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomObjectReference
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomObjectReference) {
            $data = $this->mapData(CustomObjectReference::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
