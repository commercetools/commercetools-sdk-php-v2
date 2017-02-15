<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class Attribute extends JsonObject {
    protected $name;
    protected $value;

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
     * @return array
     */
    public function getValue(): array
    {
        if (is_null($this->value)) {
            $value = $this->raw('value');
            if (!is_null($value)) {
                $this->value = $value;
            } else {
                return [];
            }
        }
        return $this->value;
    }
                
}
