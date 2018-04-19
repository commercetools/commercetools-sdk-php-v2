<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

interface AttributeEnumType extends AttributeType
{
    const FIELD_VALUES = 'values';

    /**
     * @return AttributePlainEnumValueCollection
     */
    public function getValues();

    /**
     * @param AttributePlainEnumValueCollection $values
     * @return $this
     */
    public function setValues(AttributePlainEnumValueCollection $values);

}
