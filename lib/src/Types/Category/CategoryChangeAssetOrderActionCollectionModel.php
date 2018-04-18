<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CategoryChangeAssetOrderActionCollectionModel extends CategoryUpdateActionCollectionModel implements CategoryChangeAssetOrderActionCollection {

    /**
     * @param CategoryChangeAssetOrderAction $value
     * @return CategoryChangeAssetOrderActionCollection
     */
    public function add($value) {
        if (!$value instanceof CategoryChangeAssetOrderAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CategoryChangeAssetOrderAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CategoryChangeAssetOrderAction) {
            $data = $this->mapData(CategoryChangeAssetOrderAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
