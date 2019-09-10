<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

interface DuplicateVariantValuesError extends ErrorObject
{
    const FIELD_VARIANT_VALUES = 'variantValues';

    /**
     * @return null|VariantValues
     */
    public function getVariantValues();

    public function setVariantValues(?VariantValues $variantValues): void;
}
