<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\TypeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class TypeAddFieldDefinitionActionCollectionModel extends TypeUpdateActionCollectionModel implements TypeAddFieldDefinitionActionCollection {

    /**
     * @param TypeAddFieldDefinitionAction $value
     * @return TypeAddFieldDefinitionActionCollection
     */
    public function add($value) {
        if (!$value instanceof TypeAddFieldDefinitionAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TypeAddFieldDefinitionAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TypeAddFieldDefinitionAction) {
            $data = $this->mapData(TypeAddFieldDefinitionAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
