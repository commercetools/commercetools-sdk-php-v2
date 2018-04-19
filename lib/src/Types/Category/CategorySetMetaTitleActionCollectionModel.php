<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CategorySetMetaTitleActionCollectionModel extends CategoryUpdateActionCollectionModel implements CategorySetMetaTitleActionCollection
{

    /**
     * @param CategorySetMetaTitleAction $value
     * @return CategorySetMetaTitleActionCollection
     */
    public function add($value) {
        if (!$value instanceof CategorySetMetaTitleAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CategorySetMetaTitleAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CategorySetMetaTitleAction) {
            $data = $this->mapData(CategorySetMetaTitleAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
