<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\Review\ReviewUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ReviewSetAuthorNameActionCollectionModel extends ReviewUpdateActionCollectionModel implements ReviewSetAuthorNameActionCollection
{

    /**
     * @param ReviewSetAuthorNameAction $value
     * @return ReviewSetAuthorNameActionCollection
     */
    public function add($value) {
        if (!$value instanceof ReviewSetAuthorNameAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ReviewSetAuthorNameAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ReviewSetAuthorNameAction) {
            $data = $this->mapData(ReviewSetAuthorNameAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
