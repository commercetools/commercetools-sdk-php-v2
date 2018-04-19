<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CategorySetDescriptionActionCollectionModel extends CategoryUpdateActionCollectionModel implements CategorySetDescriptionActionCollection
{

    /**
     * @param CategorySetDescriptionAction $value
     * @return CategorySetDescriptionActionCollection
     */
    public function add($value) {
        if (!$value instanceof CategorySetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CategorySetDescriptionAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CategorySetDescriptionAction) {
            $data = $this->mapData(CategorySetDescriptionAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
