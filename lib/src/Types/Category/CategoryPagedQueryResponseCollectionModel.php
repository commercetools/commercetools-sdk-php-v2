<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\PagedQueryResponseCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CategoryPagedQueryResponseCollectionModel extends PagedQueryResponseCollectionModel implements CategoryPagedQueryResponseCollection
{

    /**
     * @param CategoryPagedQueryResponse $value
     * @return CategoryPagedQueryResponseCollection
     */
    public function add($value) {
        if (!$value instanceof CategoryPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CategoryPagedQueryResponse
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CategoryPagedQueryResponse) {
            $data = $this->mapData(CategoryPagedQueryResponse::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
