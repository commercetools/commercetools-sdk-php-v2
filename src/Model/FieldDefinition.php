<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class FieldDefinition extends JsonObject {
    protected $type;
    protected $name;
    protected $label;
    protected $required;
    protected $inputHint;

    /**
     * @return FieldType
     */
    public function getType(): FieldType
    {
        if (is_null($this->type)) {
            $value = $this->raw('type');
            if (!is_null($value)) {
                $this->type = Mapper::map($value, FieldType::class);
            } else {
                return Mapper::map([], FieldType::class);
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
    public function getRequired(): bool
    {
        if (is_null($this->required)) {
            $value = $this->raw('required');
            if (!is_null($value)) {
                $this->required = (bool)$value;
            } else {
                return false;
            }
        }
        return $this->required;
    }
                

    /**
     * @return string
     */
    public function getInputHint(): string
    {
        if (is_null($this->inputHint)) {
            $value = $this->raw('inputHint');
            if (!is_null($value)) {
                $this->inputHint = (string)$value;
            } else {
                return '';
            }
        }
        return $this->inputHint;
    }
                
}
