<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CategoryAddAssetActionCollectionModel extends CategoryUpdateActionCollectionModel implements CategoryAddAssetActionCollection {

    /**
     * @param CategoryAddAssetAction $value
     * @return CategoryAddAssetActionCollection
     */
    public function add($value) {
        if (!$value instanceof CategoryAddAssetAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CategoryAddAssetAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CategoryAddAssetAction) {
            $data = $this->mapData(CategoryAddAssetAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
