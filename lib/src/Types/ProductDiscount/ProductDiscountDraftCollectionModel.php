<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ProductDiscountDraftCollectionModel extends JsonCollection implements ProductDiscountDraftCollection {

    /**
     * @param ProductDiscountDraft $value
     * @return ProductDiscountDraftCollection
     */
    public function add($value) {
        if (!$value instanceof ProductDiscountDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductDiscountDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductDiscountDraft) {
            $data = $this->mapData(ProductDiscountDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
