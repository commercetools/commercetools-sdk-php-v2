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
 * @extends MessageCollection<ReviewStateTransitionMessage>
 * @method ReviewStateTransitionMessage current()
 * @method ReviewStateTransitionMessage at($offset)
 */
class ReviewStateTransitionMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ReviewStateTransitionMessage $value
     * @psalm-param ReviewStateTransitionMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReviewStateTransitionMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReviewStateTransitionMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReviewStateTransitionMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ReviewStateTransitionMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ReviewStateTransitionMessage $data */
                $data = ReviewStateTransitionMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
