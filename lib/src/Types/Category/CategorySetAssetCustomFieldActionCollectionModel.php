<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CategorySetAssetCustomFieldActionCollectionModel extends CategoryUpdateActionCollectionModel implements CategorySetAssetCustomFieldActionCollection {

    /**
     * @param CategorySetAssetCustomFieldAction $value
     * @return CategorySetAssetCustomFieldActionCollection
     */
    public function add($value) {
        if (!$value instanceof CategorySetAssetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CategorySetAssetCustomFieldAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CategorySetAssetCustomFieldAction) {
            $data = $this->mapData(CategorySetAssetCustomFieldAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
