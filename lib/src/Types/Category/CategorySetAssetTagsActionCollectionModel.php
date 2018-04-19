<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CategorySetAssetTagsActionCollectionModel extends CategoryUpdateActionCollectionModel implements CategorySetAssetTagsActionCollection
{

    /**
     * @param CategorySetAssetTagsAction $value
     * @return CategorySetAssetTagsActionCollection
     */
    public function add($value) {
        if (!$value instanceof CategorySetAssetTagsAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CategorySetAssetTagsAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CategorySetAssetTagsAction) {
            $data = $this->mapData(CategorySetAssetTagsAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
