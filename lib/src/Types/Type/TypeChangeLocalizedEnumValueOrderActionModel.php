<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Type\TypeUpdateActionModel;

class TypeChangeLocalizedEnumValueOrderActionModel extends TypeUpdateActionModel implements TypeChangeLocalizedEnumValueOrderAction {
    const DISCRIMINATOR_VALUE = 'changeLocalizedEnumValueOrder';

    /**
     * @var string
     */
    protected $fieldName;
    /**
     * @var array
     */
    protected $keys;

    /**
     * @return string
     */
    public function getFieldName()
    {
        if (is_null($this->fieldName)) {
            $value = $this->raw(TypeChangeLocalizedEnumValueOrderAction::FIELD_FIELD_NAME);
            $value = (string)$value;
            $this->fieldName = $value;
        }
        return $this->fieldName;
    }
    /**
     * @return array
     */
    public function getKeys()
    {
        if (is_null($this->keys)) {
            $value = $this->raw(TypeChangeLocalizedEnumValueOrderAction::FIELD_KEYS);
            $value = (array)$value;
            $this->keys = $value;
        }
        return $this->keys;
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
    /**
     * @param $keys
     * @return $this
     */
    public function setKeys($keys)
    {
        $this->keys = $keys;

        return $this;
    }

}
