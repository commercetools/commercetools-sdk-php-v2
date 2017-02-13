<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class AttributeDefinition extends JsonObject {
    protected $type;
    protected $name;
    protected $label;
    protected $isRequired;
    protected $attributeConstraint;
    protected $inputTip;
    protected $inputHint;
    protected $isSearchable;

    /**
     * @return AttributeType
     */
    public function getType(): AttributeType
    {
        if (is_null($this->type)) {
            $value = $this->raw('type');
            if (!is_null($value)) {
                $this->type = Mapper::map($value, AttributeType::resolveDiscriminatorClass($value));
            } else {
                return Mapper::map([], AttributeType::class);
            }
        }
        return $this->type;
    }
                

    /**
     * @return string
     */
    public function getName(): string
    {
        if (is_null($this->name)) {
            $value = $this->raw('name');
            if (!is_null($value)) {
                $this->name = (string)$value;
            } else {
                return '';
            }
        }
        return $this->name;
    }
                

    /**
     * @return LocalizedString
     */
    public function getLabel(): LocalizedString
    {
        if (is_null($this->label)) {
            $value = $this->raw('label');
            if (!is_null($value)) {
                $this->label = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->label;
    }
                

    /**
     * @return bool
     */
    public function getIsRequired(): bool
    {
        if (is_null($this->isRequired)) {
            $value = $this->raw('isRequired');
            if (!is_null($value)) {
                $this->isRequired = (bool)$value;
            } else {
                return false;
            }
        }
        return $this->isRequired;
    }
                

    /**
     * @return string
     */
    public function getAttributeConstraint(): string
    {
        if (is_null($this->attributeConstraint)) {
            $value = $this->raw('attributeConstraint');
            if (!is_null($value)) {
                $this->attributeConstraint = (string)$value;
            } else {
                return '';
            }
        }
        return $this->attributeConstraint;
    }
                

    /**
     * @return LocalizedString
     */
    public function getInputTip(): LocalizedString
    {
        if (is_null($this->inputTip)) {
            $value = $this->raw('inputTip');
            if (!is_null($value)) {
                $this->inputTip = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->inputTip;
    }
                

    /**
     * @return TextInputHint
     */
    public function getInputHint(): TextInputHint
    {
        if (is_null($this->inputHint)) {
            $value = $this->raw('inputHint');
            if (!is_null($value)) {
                $this->inputHint = Mapper::map($value, TextInputHint::class);
            } else {
                return Mapper::map([], TextInputHint::class);
            }
        }
        return $this->inputHint;
    }
                

    /**
     * @return bool
     */
    public function getIsSearchable(): bool
    {
        if (is_null($this->isSearchable)) {
            $value = $this->raw('isSearchable');
            if (!is_null($value)) {
                $this->isSearchable = (bool)$value;
            } else {
                return false;
            }
        }
        return $this->isSearchable;
    }
                
}
