<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Project;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Type\CustomFieldLocalizedEnumValueCollection;

interface CartClassificationType extends ShippingRateInputType
{
    
    const FIELD_VALUES = 'values';

    /**
     *
     * @return CustomFieldLocalizedEnumValueCollection|null
     */
    public function getValues();
    public function setValues(?CustomFieldLocalizedEnumValueCollection $values): void;
}