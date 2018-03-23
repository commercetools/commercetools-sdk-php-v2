<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectModel;

use Commercetools\Types\Product\Attribute;
use Commercetools\Types\Product\AttributeCollection;

class DuplicateAttributeValuesErrorModel extends ErrorObjectModel implements DuplicateAttributeValuesError {
    const DISCRIMINATOR_VALUE = 'DuplicateAttributeValues';

    /**
     * @var AttributeCollection
     */
    protected $attributes;

    /**
     * @return AttributeCollection
     */
    public function getAttributes()
    {
        if (is_null($this->attributes)) {
            $value = $this->raw(DuplicateAttributeValuesError::FIELD_ATTRIBUTES);
            if (is_null($value)) {
                return $this->mapData(AttributeCollection::class, null);
            }
            $value = $this->mapData(AttributeCollection::class, $value);
            $this->attributes = $value;
        }
        return $this->attributes;
    }

    /**
     * @param AttributeCollection $attributes
     * @return $this
     */
    public function setAttributes(AttributeCollection $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

}
