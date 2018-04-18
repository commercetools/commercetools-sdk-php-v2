<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\PagedQueryResponseCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ReviewPagedQueryResponseCollectionModel extends PagedQueryResponseCollectionModel implements ReviewPagedQueryResponseCollection {

    /**
     * @param ReviewPagedQueryResponse $value
     * @return ReviewPagedQueryResponseCollection
     */
    public function add($value) {
        if (!$value instanceof ReviewPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ReviewPagedQueryResponse
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ReviewPagedQueryResponse) {
            $data = $this->mapData(ReviewPagedQueryResponse::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
