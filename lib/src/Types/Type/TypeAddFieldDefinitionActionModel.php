<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Type\TypeUpdateActionModel;

class TypeAddFieldDefinitionActionModel extends TypeUpdateActionModel implements TypeAddFieldDefinitionAction
{
    const DISCRIMINATOR_VALUE = 'addFieldDefinition';

    /**
     * @var FieldDefinition
     */
    protected $fieldDefinition;

    /**
     * @return FieldDefinition
     */
    public function getFieldDefinition()
    {
        if (is_null($this->fieldDefinition)) {
            $value = $this->raw(TypeAddFieldDefinitionAction::FIELD_FIELD_DEFINITION);
            if (is_null($value)) {
                return $this->mapData(FieldDefinition::class, null);
            }
            $value = $this->mapData(FieldDefinition::class, $value);

            $this->fieldDefinition = $value;
        }
        return $this->fieldDefinition;
    }

    /**
     * @param FieldDefinition $fieldDefinition
     * @return $this
     */
    public function setFieldDefinition(FieldDefinition $fieldDefinition)
    {
        $this->fieldDefinition = $fieldDefinition;

        return $this;
    }

}
