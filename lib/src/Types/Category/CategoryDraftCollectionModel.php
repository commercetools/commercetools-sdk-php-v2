<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class CategoryDraftCollectionModel extends JsonCollection implements CategoryDraftCollection
{

    /**
     * @param CategoryDraft $value
     * @return CategoryDraftCollection
     */
    public function add($value) {
        if (!$value instanceof CategoryDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CategoryDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CategoryDraft) {
            $data = $this->mapData(CategoryDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
