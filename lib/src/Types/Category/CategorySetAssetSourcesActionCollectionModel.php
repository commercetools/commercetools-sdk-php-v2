<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CategorySetAssetSourcesActionCollectionModel extends CategoryUpdateActionCollectionModel implements CategorySetAssetSourcesActionCollection
{

    /**
     * @param CategorySetAssetSourcesAction $value
     * @return CategorySetAssetSourcesActionCollection
     */
    public function add($value) {
        if (!$value instanceof CategorySetAssetSourcesAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CategorySetAssetSourcesAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CategorySetAssetSourcesAction) {
            $data = $this->mapData(CategorySetAssetSourcesAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
