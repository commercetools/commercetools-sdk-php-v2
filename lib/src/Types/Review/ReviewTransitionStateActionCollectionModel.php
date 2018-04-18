<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\Review\ReviewUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ReviewTransitionStateActionCollectionModel extends ReviewUpdateActionCollectionModel implements ReviewTransitionStateActionCollection {

    /**
     * @param ReviewTransitionStateAction $value
     * @return ReviewTransitionStateActionCollection
     */
    public function add($value) {
        if (!$value instanceof ReviewTransitionStateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ReviewTransitionStateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ReviewTransitionStateAction) {
            $data = $this->mapData(ReviewTransitionStateAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
