<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\Review\ReviewUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ReviewSetLocaleActionCollectionModel extends ReviewUpdateActionCollectionModel implements ReviewSetLocaleActionCollection
{

    /**
     * @param ReviewSetLocaleAction $value
     * @return ReviewSetLocaleActionCollection
     */
    public function add($value) {
        if (!$value instanceof ReviewSetLocaleAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ReviewSetLocaleAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ReviewSetLocaleAction) {
            $data = $this->mapData(ReviewSetLocaleAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
