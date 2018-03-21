<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Product\Attribute;
use Commercetools\Types\Product\AttributeCollection;

interface DuplicateAttributeValuesError extends ErrorObject {
    const FIELD_ATTRIBUTES = 'attributes';

    /**
     * @return AttributeCollection
     */
    public function getAttributes();

    /**
     * @param AttributeCollection $attributes
     * @return $this
     */
    public function setAttributes(AttributeCollection $attributes);

}
