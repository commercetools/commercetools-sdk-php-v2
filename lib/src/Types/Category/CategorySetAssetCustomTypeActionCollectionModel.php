<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CategorySetAssetCustomTypeActionCollectionModel extends CategoryUpdateActionCollectionModel implements CategorySetAssetCustomTypeActionCollection
{

    /**
     * @param CategorySetAssetCustomTypeAction $value
     * @return CategorySetAssetCustomTypeActionCollection
     */
    public function add($value) {
        if (!$value instanceof CategorySetAssetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CategorySetAssetCustomTypeAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CategorySetAssetCustomTypeAction) {
            $data = $this->mapData(CategorySetAssetCustomTypeAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
