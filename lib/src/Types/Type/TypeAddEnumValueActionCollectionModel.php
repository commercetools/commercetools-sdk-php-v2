<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\TypeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class TypeAddEnumValueActionCollectionModel extends TypeUpdateActionCollectionModel implements TypeAddEnumValueActionCollection
{

    /**
     * @param TypeAddEnumValueAction $value
     * @return TypeAddEnumValueActionCollection
     */
    public function add($value) {
        if (!$value instanceof TypeAddEnumValueAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TypeAddEnumValueAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TypeAddEnumValueAction) {
            $data = $this->mapData(TypeAddEnumValueAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
