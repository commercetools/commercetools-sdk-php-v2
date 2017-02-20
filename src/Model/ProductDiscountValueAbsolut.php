<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductDiscountValueAbsolut extends ProductDiscountValue {
    protected $money;
    const DISCRIMINATOR_VALUE = 'absolute';

    /**
     * @return MoneyCollection
     */
    public function getMoney(): MoneyCollection
    {
        if (is_null($this->money)) {
            $value = $this->raw('money');
            if (!is_null($value)) {
                $this->money = Mapper::map($value, MoneyCollection::class);
            } else {
                return Mapper::map([], MoneyCollection::class);
            }
        }
        return $this->money;
    }
                
}
