<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\TypeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class TypeChangeEnumValueOrderActionCollectionModel extends TypeUpdateActionCollectionModel implements TypeChangeEnumValueOrderActionCollection {

    /**
     * @param TypeChangeEnumValueOrderAction $value
     * @return TypeChangeEnumValueOrderActionCollection
     */
    public function add($value) {
        if (!$value instanceof TypeChangeEnumValueOrderAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TypeChangeEnumValueOrderAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TypeChangeEnumValueOrderAction) {
            $data = $this->mapData(TypeChangeEnumValueOrderAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
