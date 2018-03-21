<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectModel;

class DuplicateVariantValuesErrorModel extends ErrorObjectModel implements DuplicateVariantValuesError {
    const DISCRIMINATOR_VALUE = 'DuplicateVariantValues';

    /**
     * @var VariantValues
     */
    protected $variantValues;

    /**
     * @return VariantValues
     */
    public function getVariantValues()
    {
        if (is_null($this->variantValues)) {
            $value = $this->raw(DuplicateVariantValuesError::FIELD_VARIANT_VALUES);
            if (is_null($value)) {
                return $this->mapData(VariantValues::class, null);
            }
            $value = $this->mapData(VariantValues::class, $value);

            $this->variantValues = $value;
        }
        return $this->variantValues;
    }

    /**
     * @param VariantValues $variantValues
     * @return $this
     */
    public function setVariantValues(VariantValues $variantValues)
    {
        $this->variantValues = $variantValues;

        return $this;
    }

}
