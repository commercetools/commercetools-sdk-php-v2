<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Product\Attribute;

interface DuplicateAttributeValueError extends ErrorObject {
    const FIELD_ATTRIBUTE = 'attribute';

    /**
     * @return Attribute
     */
    public function getAttribute();

    /**
     * @param Attribute $attribute
     * @return $this
     */
    public function setAttribute(Attribute $attribute);

}
