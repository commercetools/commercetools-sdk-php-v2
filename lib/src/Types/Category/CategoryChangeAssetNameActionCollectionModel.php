<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CategoryChangeAssetNameActionCollectionModel extends CategoryUpdateActionCollectionModel implements CategoryChangeAssetNameActionCollection
{

    /**
     * @param CategoryChangeAssetNameAction $value
     * @return CategoryChangeAssetNameActionCollection
     */
    public function add($value) {
        if (!$value instanceof CategoryChangeAssetNameAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CategoryChangeAssetNameAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CategoryChangeAssetNameAction) {
            $data = $this->mapData(CategoryChangeAssetNameAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
