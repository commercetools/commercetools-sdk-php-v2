<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessagePayloadCollection<ReviewStateTransitionMessagePayload>
 * @method ReviewStateTransitionMessagePayload current()
 * @method ReviewStateTransitionMessagePayload at($offset)
 */
class ReviewStateTransitionMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ReviewStateTransitionMessagePayload $value
     * @psalm-param ReviewStateTransitionMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReviewStateTransitionMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReviewStateTransitionMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReviewStateTransitionMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ReviewStateTransitionMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ReviewStateTransitionMessagePayload $data */
                $data = ReviewStateTransitionMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
