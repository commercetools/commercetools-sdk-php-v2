<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class DuplicateAttributeValuesError extends ErrorObject {
    protected $attributes;
    const DISCRIMINATOR_VALUE = 'DuplicateAttributeValues';

    /**
     * @return AttributeCollection
     */
    public function getAttributes(): AttributeCollection
    {
        if (is_null($this->attributes)) {
            $value = $this->raw('attributes');
            if (!is_null($value)) {
                $this->attributes = Mapper::map($value, AttributeCollection::class);
            } else {
                return Mapper::map([], AttributeCollection::class);
            }
        }
        return $this->attributes;
    }
                
}
