<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Type\TypeUpdateActionModel;

class TypeChangeFieldDefinitionOrderActionModel extends TypeUpdateActionModel implements TypeChangeFieldDefinitionOrderAction {
    const DISCRIMINATOR_VALUE = 'changeFieldDefinitionOrder';

    /**
     * @var array
     */
    protected $fieldNames;

    /**
     * @return array
     */
    public function getFieldNames()
    {
        if (is_null($this->fieldNames)) {
            $value = $this->raw(TypeChangeFieldDefinitionOrderAction::FIELD_FIELD_NAMES);
            $value = (array)$value;
            $this->fieldNames = $value;
        }
        return $this->fieldNames;
    }

    /**
     * @param $fieldNames
     * @return $this
     */
    public function setFieldNames($fieldNames)
    {
        $this->fieldNames = $fieldNames;

        return $this;
    }

}
