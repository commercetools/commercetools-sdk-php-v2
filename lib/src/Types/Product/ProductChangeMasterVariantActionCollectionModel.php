<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductChangeMasterVariantActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductChangeMasterVariantActionCollection {

    /**
     * @param ProductChangeMasterVariantAction $value
     * @return ProductChangeMasterVariantActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductChangeMasterVariantAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductChangeMasterVariantAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductChangeMasterVariantAction) {
            $data = $this->mapData(ProductChangeMasterVariantAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
