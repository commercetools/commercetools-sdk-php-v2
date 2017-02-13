<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class AttributeLocalizedEnumValue extends JsonObject {
    protected $key;
    protected $label;

    /**
     * @return string
     */
    public function getKey(): string
    {
        if (is_null($this->key)) {
            $value = $this->raw('key');
            if (!is_null($value)) {
                $this->key = (string)$value;
            } else {
                return '';
            }
        }
        return $this->key;
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
                
}
