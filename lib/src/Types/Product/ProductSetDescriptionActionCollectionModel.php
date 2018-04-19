<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductSetDescriptionActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductSetDescriptionActionCollection
{

    /**
     * @param ProductSetDescriptionAction $value
     * @return ProductSetDescriptionActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductSetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductSetDescriptionAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductSetDescriptionAction) {
            $data = $this->mapData(ProductSetDescriptionAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
