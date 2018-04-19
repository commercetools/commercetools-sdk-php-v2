<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\TypeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class TypeChangeKeyActionCollectionModel extends TypeUpdateActionCollectionModel implements TypeChangeKeyActionCollection
{

    /**
     * @param TypeChangeKeyAction $value
     * @return TypeChangeKeyActionCollection
     */
    public function add($value) {
        if (!$value instanceof TypeChangeKeyAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TypeChangeKeyAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TypeChangeKeyAction) {
            $data = $this->mapData(TypeChangeKeyAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
