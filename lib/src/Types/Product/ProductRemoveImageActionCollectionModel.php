<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductRemoveImageActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductRemoveImageActionCollection
{

    /**
     * @param ProductRemoveImageAction $value
     * @return ProductRemoveImageActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductRemoveImageAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductRemoveImageAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductRemoveImageAction) {
            $data = $this->mapData(ProductRemoveImageAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
