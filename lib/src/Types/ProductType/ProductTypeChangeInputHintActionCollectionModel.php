<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductTypeChangeInputHintActionCollectionModel extends ProductTypeUpdateActionCollectionModel implements ProductTypeChangeInputHintActionCollection
{

    /**
     * @param ProductTypeChangeInputHintAction $value
     * @return ProductTypeChangeInputHintActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductTypeChangeInputHintAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductTypeChangeInputHintAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductTypeChangeInputHintAction) {
            $data = $this->mapData(ProductTypeChangeInputHintAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
