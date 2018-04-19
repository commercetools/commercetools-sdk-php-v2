<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\Review\ReviewUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ReviewSetKeyActionCollectionModel extends ReviewUpdateActionCollectionModel implements ReviewSetKeyActionCollection
{

    /**
     * @param ReviewSetKeyAction $value
     * @return ReviewSetKeyActionCollection
     */
    public function add($value) {
        if (!$value instanceof ReviewSetKeyAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ReviewSetKeyAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ReviewSetKeyAction) {
            $data = $this->mapData(ReviewSetKeyAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
