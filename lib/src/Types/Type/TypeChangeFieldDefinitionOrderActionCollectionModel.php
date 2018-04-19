<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\TypeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class TypeChangeFieldDefinitionOrderActionCollectionModel extends TypeUpdateActionCollectionModel implements TypeChangeFieldDefinitionOrderActionCollection
{

    /**
     * @param TypeChangeFieldDefinitionOrderAction $value
     * @return TypeChangeFieldDefinitionOrderActionCollection
     */
    public function add($value) {
        if (!$value instanceof TypeChangeFieldDefinitionOrderAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TypeChangeFieldDefinitionOrderAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TypeChangeFieldDefinitionOrderAction) {
            $data = $this->mapData(TypeChangeFieldDefinitionOrderAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
