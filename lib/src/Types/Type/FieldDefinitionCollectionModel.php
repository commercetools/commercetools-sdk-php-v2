<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class FieldDefinitionCollectionModel extends JsonCollection implements FieldDefinitionCollection {

    /**
     * @param FieldDefinition $value
     * @return FieldDefinitionCollection
     */
    public function add($value) {
        if (!$value instanceof FieldDefinition) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return FieldDefinition
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof FieldDefinition) {
            $data = $this->mapData(FieldDefinition::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
