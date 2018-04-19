<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductRevertStagedVariantChangesActionCollectionModel extends ProductUpdateActionCollectionModel implements ProductRevertStagedVariantChangesActionCollection
{

    /**
     * @param ProductRevertStagedVariantChangesAction $value
     * @return ProductRevertStagedVariantChangesActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductRevertStagedVariantChangesAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductRevertStagedVariantChangesAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductRevertStagedVariantChangesAction) {
            $data = $this->mapData(ProductRevertStagedVariantChangesAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
