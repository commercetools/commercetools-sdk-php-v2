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
 * @extends MessageCollection<LineItemStateTransitionMessage>
 * @method LineItemStateTransitionMessage current()
 * @method LineItemStateTransitionMessage end()
 * @method LineItemStateTransitionMessage at($offset)
 */
class LineItemStateTransitionMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert LineItemStateTransitionMessage $value
     * @psalm-param LineItemStateTransitionMessage|stdClass $value
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
        return function (?int $index): ?LineItemStateTransitionMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var LineItemStateTransitionMessage $data */
                $data = LineItemStateTransitionMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
