<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Common\LocalizedString;

class FieldDefinitionModel extends JsonObjectModel implements FieldDefinition {
    /**
     * @var object
     */
    protected $type;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var LocalizedString
     */
    protected $label;
    /**
     * @var mixed
     */
    protected $required;
    /**
     * @var string
     */
    protected $inputHint;

    /**
     * @return object
     */
    public function getType()
    {
        if (is_null($this->type)) {
            $value = $this->raw(FieldDefinition::FIELD_TYPE);
            $this->type = $value;
        }
        return $this->type;
    }
    /**
     * @return string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(FieldDefinition::FIELD_NAME);
            $value = (string)$value;
            $this->name = $value;
        }
        return $this->name;
    }
    /**
     * @return LocalizedString
     */
    public function getLabel()
    {
        if (is_null($this->label)) {
            $value = $this->raw(FieldDefinition::FIELD_LABEL);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->label = $value;
        }
        return $this->label;
    }
    /**
     * @return mixed
     */
    public function getRequired()
    {
        if (is_null($this->required)) {
            $value = $this->raw(FieldDefinition::FIELD_REQUIRED);
            $this->required = $value;
        }
        return $this->required;
    }
    /**
     * @return string
     */
    public function getInputHint()
    {
        if (is_null($this->inputHint)) {
            $value = $this->raw(FieldDefinition::FIELD_INPUT_HINT);
            $value = (string)$value;
            $this->inputHint = $value;
        }
        return $this->inputHint;
    }

    /**
     * @param $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
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
    /**
     * @param LocalizedString $label
     * @return $this
     */
    public function setLabel(LocalizedString $label)
    {
        $this->label = $label;

        return $this;
    }
    /**
     * @param $required
     * @return $this
     */
    public function setRequired($required)
    {
        $this->required = $required;

        return $this;
    }
    /**
     * @param string $inputHint
     * @return $this
     */
    public function setInputHint(string $inputHint)
    {
        $this->inputHint = (string)$inputHint;

        return $this;
    }

}
