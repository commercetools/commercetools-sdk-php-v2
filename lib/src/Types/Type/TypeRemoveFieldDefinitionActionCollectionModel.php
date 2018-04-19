<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\TypeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class TypeRemoveFieldDefinitionActionCollectionModel extends TypeUpdateActionCollectionModel implements TypeRemoveFieldDefinitionActionCollection
{

    /**
     * @param TypeRemoveFieldDefinitionAction $value
     * @return TypeRemoveFieldDefinitionActionCollection
     */
    public function add($value) {
        if (!$value instanceof TypeRemoveFieldDefinitionAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TypeRemoveFieldDefinitionAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TypeRemoveFieldDefinitionAction) {
            $data = $this->mapData(TypeRemoveFieldDefinitionAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
