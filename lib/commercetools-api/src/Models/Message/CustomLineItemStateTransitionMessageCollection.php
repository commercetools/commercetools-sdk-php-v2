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
 * @extends MessageCollection<CustomLineItemStateTransitionMessage>
 * @method CustomLineItemStateTransitionMessage current()
 * @method CustomLineItemStateTransitionMessage end()
 * @method CustomLineItemStateTransitionMessage at($offset)
 */
class CustomLineItemStateTransitionMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomLineItemStateTransitionMessage $value
     * @psalm-param CustomLineItemStateTransitionMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomLineItemStateTransitionMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomLineItemStateTransitionMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomLineItemStateTransitionMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomLineItemStateTransitionMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomLineItemStateTransitionMessage $data */
                $data = CustomLineItemStateTransitionMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
