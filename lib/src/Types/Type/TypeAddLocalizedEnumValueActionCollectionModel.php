<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\TypeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class TypeAddLocalizedEnumValueActionCollectionModel extends TypeUpdateActionCollectionModel implements TypeAddLocalizedEnumValueActionCollection
{

    /**
     * @param TypeAddLocalizedEnumValueAction $value
     * @return TypeAddLocalizedEnumValueActionCollection
     */
    public function add($value) {
        if (!$value instanceof TypeAddLocalizedEnumValueAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TypeAddLocalizedEnumValueAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TypeAddLocalizedEnumValueAction) {
            $data = $this->mapData(TypeAddLocalizedEnumValueAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
