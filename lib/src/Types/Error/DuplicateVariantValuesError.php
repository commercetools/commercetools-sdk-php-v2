<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

interface DuplicateVariantValuesError extends ErrorObject
{
    const FIELD_VARIANT_VALUES = 'variantValues';

    /**
     * @return VariantValues
     */
    public function getVariantValues();

    /**
     * @param VariantValues $variantValues
     * @return $this
     */
    public function setVariantValues(VariantValues $variantValues);

}
