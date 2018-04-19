<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Type\TypeUpdateActionModel;

use Commercetools\Types\Common\LocalizedString;

class TypeChangeFieldDefinitionLabelActionModel extends TypeUpdateActionModel implements TypeChangeFieldDefinitionLabelAction
{
    const DISCRIMINATOR_VALUE = 'changeFieldDefinitionLabel';

    /**
     * @var string
     */
    protected $fieldName;
    /**
     * @var LocalizedString
     */
    protected $label;

    /**
     * @return string
     */
    public function getFieldName()
    {
        if (is_null($this->fieldName)) {
            $value = $this->raw(TypeChangeFieldDefinitionLabelAction::FIELD_FIELD_NAME);
            $value = (string)$value;
            $this->fieldName = $value;
        }
        return $this->fieldName;
    }
    /**
     * @return LocalizedString
     */
    public function getLabel()
    {
        if (is_null($this->label)) {
            $value = $this->raw(TypeChangeFieldDefinitionLabelAction::FIELD_LABEL);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->label = $value;
        }
        return $this->label;
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
     * @param LocalizedString $label
     * @return $this
     */
    public function setLabel(LocalizedString $label)
    {
        $this->label = $label;

        return $this;
    }

}
