<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

interface AttributeLocalizedEnumType extends AttributeType
{
    const FIELD_VALUES = 'values';

    /**
     * @return AttributeLocalizedEnumValueCollection
     */
    public function getValues();

    /**
     * @param AttributeLocalizedEnumValueCollection $values
     * @return $this
     */
    public function setValues(AttributeLocalizedEnumValueCollection $values);

}
