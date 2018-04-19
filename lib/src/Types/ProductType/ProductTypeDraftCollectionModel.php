<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ProductTypeDraftCollectionModel extends JsonCollection implements ProductTypeDraftCollection
{

    /**
     * @param ProductTypeDraft $value
     * @return ProductTypeDraftCollection
     */
    public function add($value) {
        if (!$value instanceof ProductTypeDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductTypeDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductTypeDraft) {
            $data = $this->mapData(ProductTypeDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
