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
 * @extends MapperSequence<ReviewCreatedMessagePayload>
 *
 * @method ReviewCreatedMessagePayload current()
 * @method ReviewCreatedMessagePayload at($offset)
 */
class ReviewCreatedMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert ReviewCreatedMessagePayload $value
     * @psalm-param ReviewCreatedMessagePayload|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ReviewCreatedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReviewCreatedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReviewCreatedMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?ReviewCreatedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ReviewCreatedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
