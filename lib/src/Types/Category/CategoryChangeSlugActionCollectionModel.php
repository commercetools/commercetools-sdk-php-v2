<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CategoryChangeSlugActionCollectionModel extends CategoryUpdateActionCollectionModel implements CategoryChangeSlugActionCollection {

    /**
     * @param CategoryChangeSlugAction $value
     * @return CategoryChangeSlugActionCollection
     */
    public function add($value) {
        if (!$value instanceof CategoryChangeSlugAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CategoryChangeSlugAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CategoryChangeSlugAction) {
            $data = $this->mapData(CategoryChangeSlugAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
