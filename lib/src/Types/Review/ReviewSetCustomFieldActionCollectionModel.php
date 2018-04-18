<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\Review\ReviewUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ReviewSetCustomFieldActionCollectionModel extends ReviewUpdateActionCollectionModel implements ReviewSetCustomFieldActionCollection {

    /**
     * @param ReviewSetCustomFieldAction $value
     * @return ReviewSetCustomFieldActionCollection
     */
    public function add($value) {
        if (!$value instanceof ReviewSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ReviewSetCustomFieldAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ReviewSetCustomFieldAction) {
            $data = $this->mapData(ReviewSetCustomFieldAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
