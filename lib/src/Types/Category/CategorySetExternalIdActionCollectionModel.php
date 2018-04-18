<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CategorySetExternalIdActionCollectionModel extends CategoryUpdateActionCollectionModel implements CategorySetExternalIdActionCollection {

    /**
     * @param CategorySetExternalIdAction $value
     * @return CategorySetExternalIdActionCollection
     */
    public function add($value) {
        if (!$value instanceof CategorySetExternalIdAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CategorySetExternalIdAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CategorySetExternalIdAction) {
            $data = $this->mapData(CategorySetExternalIdAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
