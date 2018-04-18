<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\UpdateCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ReviewUpdateCollectionModel extends UpdateCollectionModel implements ReviewUpdateCollection {

    /**
     * @param ReviewUpdate $value
     * @return ReviewUpdateCollection
     */
    public function add($value) {
        if (!$value instanceof ReviewUpdate) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ReviewUpdate
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ReviewUpdate) {
            $data = $this->mapData(ReviewUpdate::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
