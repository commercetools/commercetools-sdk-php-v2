<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ProductDiscountMatchQueryCollectionModel extends JsonCollection implements ProductDiscountMatchQueryCollection
{

    /**
     * @param ProductDiscountMatchQuery $value
     * @return ProductDiscountMatchQueryCollection
     */
    public function add($value) {
        if (!$value instanceof ProductDiscountMatchQuery) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductDiscountMatchQuery
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductDiscountMatchQuery) {
            $data = $this->mapData(ProductDiscountMatchQuery::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
