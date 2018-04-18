<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ProductDraftCollectionModel extends JsonCollection implements ProductDraftCollection {

    /**
     * @param ProductDraft $value
     * @return ProductDraftCollection
     */
    public function add($value) {
        if (!$value instanceof ProductDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductDraft) {
            $data = $this->mapData(ProductDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
