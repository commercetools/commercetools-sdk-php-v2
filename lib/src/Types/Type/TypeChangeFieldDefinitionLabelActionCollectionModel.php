<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\TypeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class TypeChangeFieldDefinitionLabelActionCollectionModel extends TypeUpdateActionCollectionModel implements TypeChangeFieldDefinitionLabelActionCollection
{

    /**
     * @param TypeChangeFieldDefinitionLabelAction $value
     * @return TypeChangeFieldDefinitionLabelActionCollection
     */
    public function add($value) {
        if (!$value instanceof TypeChangeFieldDefinitionLabelAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TypeChangeFieldDefinitionLabelAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TypeChangeFieldDefinitionLabelAction) {
            $data = $this->mapData(TypeChangeFieldDefinitionLabelAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
