<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class AttributeDefinitionCollectionModel extends JsonCollection implements AttributeDefinitionCollection
{

    /**
     * @param AttributeDefinition $value
     * @return AttributeDefinitionCollection
     */
    public function add($value) {
        if (!$value instanceof AttributeDefinition) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return AttributeDefinition
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof AttributeDefinition) {
            $data = $this->mapData(AttributeDefinition::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
