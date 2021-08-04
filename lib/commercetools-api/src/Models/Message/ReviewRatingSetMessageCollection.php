<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<ReviewRatingSetMessage>
 * @method ReviewRatingSetMessage current()
 * @method ReviewRatingSetMessage end()
 * @method ReviewRatingSetMessage at($offset)
 */
class ReviewRatingSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ReviewRatingSetMessage $value
     * @psalm-param ReviewRatingSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReviewRatingSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReviewRatingSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReviewRatingSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ReviewRatingSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ReviewRatingSetMessage $data */
                $data = ReviewRatingSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
