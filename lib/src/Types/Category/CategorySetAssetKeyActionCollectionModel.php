<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CategorySetAssetKeyActionCollectionModel extends CategoryUpdateActionCollectionModel implements CategorySetAssetKeyActionCollection {

    /**
     * @param CategorySetAssetKeyAction $value
     * @return CategorySetAssetKeyActionCollection
     */
    public function add($value) {
        if (!$value instanceof CategorySetAssetKeyAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CategorySetAssetKeyAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CategorySetAssetKeyAction) {
            $data = $this->mapData(CategorySetAssetKeyAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
