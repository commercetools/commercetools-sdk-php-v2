<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CategorySetMetaKeywordsActionCollectionModel extends CategoryUpdateActionCollectionModel implements CategorySetMetaKeywordsActionCollection {

    /**
     * @param CategorySetMetaKeywordsAction $value
     * @return CategorySetMetaKeywordsActionCollection
     */
    public function add($value) {
        if (!$value instanceof CategorySetMetaKeywordsAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CategorySetMetaKeywordsAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CategorySetMetaKeywordsAction) {
            $data = $this->mapData(CategorySetMetaKeywordsAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
