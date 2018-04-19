<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ReviewRatingSetMessageCollectionModel extends MessageCollectionModel implements ReviewRatingSetMessageCollection
{

    /**
     * @param ReviewRatingSetMessage $value
     * @return ReviewRatingSetMessageCollection
     */
    public function add($value) {
        if (!$value instanceof ReviewRatingSetMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ReviewRatingSetMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ReviewRatingSetMessage) {
            $data = $this->mapData(ReviewRatingSetMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
