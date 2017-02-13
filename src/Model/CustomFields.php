<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CustomFields extends JsonObject {
    protected $type;
    protected $fields;

    /**
     * @return TypeReference
     */
    public function getType(): TypeReference
    {
        if (is_null($this->type)) {
            $value = $this->raw('type');
            if (!is_null($value)) {
                $this->type = Mapper::map($value, TypeReference::class);
            } else {
                return Mapper::map([], TypeReference::class);
            }
        }
        return $this->type;
    }
                

    /**
     * @return array
     */
    public function getFields(): array
    {
        if (is_null($this->fields)) {
            $value = $this->raw('fields');
            if (!is_null($value)) {
                $this->fields = $value;
            } else {
                return [];
            }
        }
        return $this->fields;
    }
                
}
