<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductChangeSlugActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductChangeSlugActionCollection
{

    /**
     * @param ProductChangeSlugAction $value
     * @return ProductChangeSlugActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductChangeSlugAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductChangeSlugAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductChangeSlugAction) {
            $data = $this->mapData(ProductChangeSlugAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
