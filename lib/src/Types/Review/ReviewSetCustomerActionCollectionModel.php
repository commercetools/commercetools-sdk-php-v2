<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\Review\ReviewUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ReviewSetCustomerActionCollectionModel extends ReviewUpdateActionCollectionModel implements ReviewSetCustomerActionCollection
{

    /**
     * @param ReviewSetCustomerAction $value
     * @return ReviewSetCustomerActionCollection
     */
    public function add($value) {
        if (!$value instanceof ReviewSetCustomerAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ReviewSetCustomerAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ReviewSetCustomerAction) {
            $data = $this->mapData(ReviewSetCustomerAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
