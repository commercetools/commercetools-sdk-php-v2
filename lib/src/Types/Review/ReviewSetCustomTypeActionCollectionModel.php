<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\Review\ReviewUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ReviewSetCustomTypeActionCollectionModel extends ReviewUpdateActionCollectionModel implements ReviewSetCustomTypeActionCollection
{

    /**
     * @param ReviewSetCustomTypeAction $value
     * @return ReviewSetCustomTypeActionCollection
     */
    public function add($value) {
        if (!$value instanceof ReviewSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ReviewSetCustomTypeAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ReviewSetCustomTypeAction) {
            $data = $this->mapData(ReviewSetCustomTypeAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
