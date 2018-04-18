<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ReviewStateTransitionMessageCollectionModel extends MessageCollectionModel implements ReviewStateTransitionMessageCollection {

    /**
     * @param ReviewStateTransitionMessage $value
     * @return ReviewStateTransitionMessageCollection
     */
    public function add($value) {
        if (!$value instanceof ReviewStateTransitionMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ReviewStateTransitionMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ReviewStateTransitionMessage) {
            $data = $this->mapData(ReviewStateTransitionMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
