<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class DuplicateVariantValuesError extends ErrorObject {
    protected $variantValues;
    const DISCRIMINATOR_VALUE = 'DuplicateVariantValues';

    /**
     * @return VariantValues
     */
    public function getVariantValues(): VariantValues
    {
        if (is_null($this->variantValues)) {
            $value = $this->raw('variantValues');
            if (!is_null($value)) {
                $this->variantValues = Mapper::map($value, VariantValues::class);
            } else {
                return Mapper::map([], VariantValues::class);
            }
        }
        return $this->variantValues;
    }
                
}
