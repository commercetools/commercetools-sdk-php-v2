<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CategoryChangeOrderHintActionCollectionModel extends CategoryUpdateActionCollectionModel implements CategoryChangeOrderHintActionCollection {

    /**
     * @param CategoryChangeOrderHintAction $value
     * @return CategoryChangeOrderHintActionCollection
     */
    public function add($value) {
        if (!$value instanceof CategoryChangeOrderHintAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CategoryChangeOrderHintAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CategoryChangeOrderHintAction) {
            $data = $this->mapData(CategoryChangeOrderHintAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
