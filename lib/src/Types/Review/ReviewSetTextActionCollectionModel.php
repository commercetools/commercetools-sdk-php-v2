<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\Review\ReviewUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ReviewSetTextActionCollectionModel extends ReviewUpdateActionCollectionModel implements ReviewSetTextActionCollection {

    /**
     * @param ReviewSetTextAction $value
     * @return ReviewSetTextActionCollection
     */
    public function add($value) {
        if (!$value instanceof ReviewSetTextAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ReviewSetTextAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ReviewSetTextAction) {
            $data = $this->mapData(ReviewSetTextAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
