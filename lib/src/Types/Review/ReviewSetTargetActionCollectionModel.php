<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\Review\ReviewUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ReviewSetTargetActionCollectionModel extends ReviewUpdateActionCollectionModel implements ReviewSetTargetActionCollection {

    /**
     * @param ReviewSetTargetAction $value
     * @return ReviewSetTargetActionCollection
     */
    public function add($value) {
        if (!$value instanceof ReviewSetTargetAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ReviewSetTargetAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ReviewSetTargetAction) {
            $data = $this->mapData(ReviewSetTargetAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
