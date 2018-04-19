<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\Review\ReviewUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ReviewSetRatingActionCollectionModel extends ReviewUpdateActionCollectionModel implements ReviewSetRatingActionCollection
{

    /**
     * @param ReviewSetRatingAction $value
     * @return ReviewSetRatingActionCollection
     */
    public function add($value) {
        if (!$value instanceof ReviewSetRatingAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ReviewSetRatingAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ReviewSetRatingAction) {
            $data = $this->mapData(ReviewSetRatingAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
