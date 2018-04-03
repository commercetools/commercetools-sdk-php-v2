<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ProductDiscountUpdateActionCollectionModel extends JsonCollection implements ProductDiscountUpdateActionCollection {

    /**
     * @param ProductDiscountUpdateAction $value
     * @return ProductDiscountUpdateActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductDiscountUpdateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductDiscountUpdateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductDiscountUpdateAction) {
            $resolvedClass = $this->resolveDiscriminator(ProductDiscountUpdateAction::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
