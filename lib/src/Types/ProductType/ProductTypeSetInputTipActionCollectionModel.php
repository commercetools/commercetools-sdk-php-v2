<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductTypeSetInputTipActionCollectionModel extends ProductTypeUpdateActionCollectionModel implements ProductTypeSetInputTipActionCollection
{

    /**
     * @param ProductTypeSetInputTipAction $value
     * @return ProductTypeSetInputTipActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductTypeSetInputTipAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductTypeSetInputTipAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductTypeSetInputTipAction) {
            $data = $this->mapData(ProductTypeSetInputTipAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
