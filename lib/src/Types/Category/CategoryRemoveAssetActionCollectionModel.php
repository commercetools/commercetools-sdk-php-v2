<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CategoryRemoveAssetActionCollectionModel extends CategoryUpdateActionCollectionModel implements CategoryRemoveAssetActionCollection
{

    /**
     * @param CategoryRemoveAssetAction $value
     * @return CategoryRemoveAssetActionCollection
     */
    public function add($value) {
        if (!$value instanceof CategoryRemoveAssetAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CategoryRemoveAssetAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CategoryRemoveAssetAction) {
            $data = $this->mapData(CategoryRemoveAssetAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
