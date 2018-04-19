<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CategorySetAssetDescriptionActionCollectionModel extends CategoryUpdateActionCollectionModel implements CategorySetAssetDescriptionActionCollection
{

    /**
     * @param CategorySetAssetDescriptionAction $value
     * @return CategorySetAssetDescriptionActionCollection
     */
    public function add($value) {
        if (!$value instanceof CategorySetAssetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CategorySetAssetDescriptionAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CategorySetAssetDescriptionAction) {
            $data = $this->mapData(CategorySetAssetDescriptionAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
