<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\ProductType\ProductTypeUpdateActionModel;

class ProductTypeRemoveAttributeDefinitionActionModel extends ProductTypeUpdateActionModel implements ProductTypeRemoveAttributeDefinitionAction
{
    const DISCRIMINATOR_VALUE = 'removeAttributeDefinition';

    /**
     * @var string
     */
    protected $name;

    /**
     * @return string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(ProductTypeRemoveAttributeDefinitionAction::FIELD_NAME);
            $value = (string)$value;
            $this->name = $value;
        }
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name)
    {
        $this->name = (string)$name;

        return $this;
    }

}
