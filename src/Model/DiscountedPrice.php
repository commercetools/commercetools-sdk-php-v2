<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class DiscountedPrice extends JsonObject {
    protected $value;
    protected $discount;

    /**
     * @return Money
     */
    public function getValue(): Money
    {
        if (is_null($this->value)) {
            $value = $this->raw('value');
            if (!is_null($value)) {
                $this->value = Mapper::map($value, Money::class);
            } else {
                return Mapper::map([], Money::class);
            }
        }
        return $this->value;
    }
                

    /**
     * @return ProductDiscountReference
     */
    public function getDiscount(): ProductDiscountReference
    {
        if (is_null($this->discount)) {
            $value = $this->raw('discount');
            if (!is_null($value)) {
                $this->discount = Mapper::map($value, ProductDiscountReference::class);
            } else {
                return Mapper::map([], ProductDiscountReference::class);
            }
        }
        return $this->discount;
    }
                
}
