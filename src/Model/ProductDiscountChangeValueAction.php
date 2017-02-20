<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductDiscountChangeValueAction extends ProductDiscountUpdateAction {
    protected $value;
    const DISCRIMINATOR_VALUE = 'changeValue';

    /**
     * @return ProductDiscountValue
     */
    public function getValue(): ProductDiscountValue
    {
        if (is_null($this->value)) {
            $value = $this->raw('value');
            if (!is_null($value)) {
                $this->value = Mapper::map($value, ProductDiscountValue::resolveDiscriminatorClass($value));
            } else {
                return Mapper::map([], ProductDiscountValue::class);
            }
        }
        return $this->value;
    }
                
}
