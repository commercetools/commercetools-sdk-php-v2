<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\Review\ReviewUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ReviewSetTitleActionCollectionModel extends ReviewUpdateActionCollectionModel implements ReviewSetTitleActionCollection {

    /**
     * @param ReviewSetTitleAction $value
     * @return ReviewSetTitleActionCollection
     */
    public function add($value) {
        if (!$value instanceof ReviewSetTitleAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ReviewSetTitleAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ReviewSetTitleAction) {
            $data = $this->mapData(ReviewSetTitleAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
