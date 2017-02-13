<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductTypeReference extends Reference {
    protected $obj;
    const DISCRIMINATOR_VALUE = 'product-type';

    /**
     * @return ProductType
     */
    public function getObj(): ProductType
    {
        if (is_null($this->obj)) {
            $value = $this->raw('obj');
            if (!is_null($value)) {
                $this->obj = Mapper::map($value, ProductType::class);
            } else {
                return Mapper::map([], ProductType::class);
            }
        }
        return $this->obj;
    }
                
}
