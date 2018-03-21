<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\TypeUpdateActionModel;

class TypeRemoveFieldDefinitionActionModel extends TypeUpdateActionModel implements TypeRemoveFieldDefinitionAction {
    const DISCRIMINATOR_VALUE = 'removeFieldDefinition';

    /**
     * @var string
     */
    protected $fieldName;

    /**
     * @return string
     */
    public function getFieldName()
    {
        if (is_null($this->fieldName)) {
            $value = $this->raw(TypeRemoveFieldDefinitionAction::FIELD_FIELD_NAME);
            $value = (string)$value;
            $this->fieldName = $value;
        }
        return $this->fieldName;
    }

    /**
     * @param string $fieldName
     * @return $this
     */
    public function setFieldName(string $fieldName)
    {
        $this->fieldName = (string)$fieldName;

        return $this;
    }

}
