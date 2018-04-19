<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Error\ErrorObjectModel;

use Commercetools\Types\Product\Attribute;

class DuplicateAttributeValueErrorModel extends ErrorObjectModel implements DuplicateAttributeValueError
{
    const DISCRIMINATOR_VALUE = 'DuplicateAttributeValue';

    /**
     * @var Attribute
     */
    protected $attribute;

    /**
     * @return Attribute
     */
    public function getAttribute()
    {
        if (is_null($this->attribute)) {
            $value = $this->raw(DuplicateAttributeValueError::FIELD_ATTRIBUTE);
            if (is_null($value)) {
                return $this->mapData(Attribute::class, null);
            }
            $value = $this->mapData(Attribute::class, $value);

            $this->attribute = $value;
        }
        return $this->attribute;
    }

    /**
     * @param Attribute $attribute
     * @return $this
     */
    public function setAttribute(Attribute $attribute)
    {
        $this->attribute = $attribute;

        return $this;
    }

}
