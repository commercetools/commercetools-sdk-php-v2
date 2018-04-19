<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductRevertStagedChangesActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductRevertStagedChangesActionCollection
{

    /**
     * @param ProductRevertStagedChangesAction $value
     * @return ProductRevertStagedChangesActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductRevertStagedChangesAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductRevertStagedChangesAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductRevertStagedChangesAction) {
            $data = $this->mapData(ProductRevertStagedChangesAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
