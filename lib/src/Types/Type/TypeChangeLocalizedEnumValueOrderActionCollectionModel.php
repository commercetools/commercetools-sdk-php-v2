<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\TypeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class TypeChangeLocalizedEnumValueOrderActionCollectionModel extends TypeUpdateActionCollectionModel implements TypeChangeLocalizedEnumValueOrderActionCollection {

    /**
     * @param TypeChangeLocalizedEnumValueOrderAction $value
     * @return TypeChangeLocalizedEnumValueOrderActionCollection
     */
    public function add($value) {
        if (!$value instanceof TypeChangeLocalizedEnumValueOrderAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TypeChangeLocalizedEnumValueOrderAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TypeChangeLocalizedEnumValueOrderAction) {
            $data = $this->mapData(TypeChangeLocalizedEnumValueOrderAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
