<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductUnpublishActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductUnpublishActionCollection {

    /**
     * @param ProductUnpublishAction $value
     * @return ProductUnpublishActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductUnpublishAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductUnpublishAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductUnpublishAction) {
            $data = $this->mapData(ProductUnpublishAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
