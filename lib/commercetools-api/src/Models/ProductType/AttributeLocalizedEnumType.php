<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObject;

interface AttributeLocalizedEnumType extends AttributeType
{
    
    const FIELD_VALUES = 'values';

    /**
     *
     * @return AttributeLocalizedEnumValueCollection|null
     */
    public function getValues();
    public function setValues(?AttributeLocalizedEnumValueCollection $values): void;
}