<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductPublishActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductPublishActionCollection {

    /**
     * @param ProductPublishAction $value
     * @return ProductPublishActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductPublishAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductPublishAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductPublishAction) {
            $data = $this->mapData(ProductPublishAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
