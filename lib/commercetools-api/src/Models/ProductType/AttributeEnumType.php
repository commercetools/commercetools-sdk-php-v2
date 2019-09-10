<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObject;

interface AttributeEnumType extends AttributeType
{
    
    const FIELD_VALUES = 'values';

    /**
     *
     * @return AttributePlainEnumValueCollection|null
     */
    public function getValues();
    public function setValues(?AttributePlainEnumValueCollection $values): void;
}