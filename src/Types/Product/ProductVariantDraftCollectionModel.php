<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonCollection;

class ProductVariantDraftCollectionModel extends JsonCollection implements ProductVariantDraftCollection {

    /**
     * @param ProductVariantDraft $value
     * @return ProductVariantDraftCollection
     */
    public function add($value) {
        if (!$value instanceof ProductVariantDraft) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductVariantDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductVariantDraft) {
            $data = $this->mapData(ProductVariantDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
