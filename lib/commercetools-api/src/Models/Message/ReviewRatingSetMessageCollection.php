<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ReviewRatingSetMessage>
 *
 * @method ReviewRatingSetMessage current()
 * @method ReviewRatingSetMessage at($offset)
 */
class ReviewRatingSetMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert ReviewRatingSetMessage $value
     * @psalm-param ReviewRatingSetMessage|stdClass $value
     *
     * @param mixed $value
     *
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
        return function (int $index): ?ReviewRatingSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ReviewRatingSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
