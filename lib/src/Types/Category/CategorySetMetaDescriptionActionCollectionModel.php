<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CategorySetMetaDescriptionActionCollectionModel extends CategoryUpdateActionCollectionModel implements CategorySetMetaDescriptionActionCollection
{

    /**
     * @param CategorySetMetaDescriptionAction $value
     * @return CategorySetMetaDescriptionActionCollection
     */
    public function add($value) {
        if (!$value instanceof CategorySetMetaDescriptionAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CategorySetMetaDescriptionAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CategorySetMetaDescriptionAction) {
            $data = $this->mapData(CategorySetMetaDescriptionAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
