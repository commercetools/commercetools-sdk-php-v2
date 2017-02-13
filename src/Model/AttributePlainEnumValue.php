<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class AttributePlainEnumValue extends JsonObject {
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
     * @return string
     */
    public function getLabel(): string
    {
        if (is_null($this->label)) {
            $value = $this->raw('label');
            if (!is_null($value)) {
                $this->label = (string)$value;
            } else {
                return '';
            }
        }
        return $this->label;
    }
                
}
