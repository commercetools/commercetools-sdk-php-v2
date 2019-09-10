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
 * @extends MapperSequence<LineItemStateTransitionMessage>
 *
 * @method LineItemStateTransitionMessage current()
 * @method LineItemStateTransitionMessage at($offset)
 */
class LineItemStateTransitionMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert LineItemStateTransitionMessage $value
     * @psalm-param LineItemStateTransitionMessage|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return LineItemStateTransitionMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof LineItemStateTransitionMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?LineItemStateTransitionMessage
     */
    protected function mapper()
    {
        return function (int $index): ?LineItemStateTransitionMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = LineItemStateTransitionMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
