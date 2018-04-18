<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ReviewDraftCollectionModel extends JsonCollection implements ReviewDraftCollection {

    /**
     * @param ReviewDraft $value
     * @return ReviewDraftCollection
     */
    public function add($value) {
        if (!$value instanceof ReviewDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ReviewDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ReviewDraft) {
            $data = $this->mapData(ReviewDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
