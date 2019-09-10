<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Error;

use Commercetools\Base\JsonObject;

interface DuplicateVariantValuesError extends ErrorObject
{
    
    const FIELD_VARIANT_VALUES = 'variantValues';

    /**
     *
     * @return VariantValues|null
     */
    public function getVariantValues();
    public function setVariantValues(?VariantValues $variantValues): void;
}