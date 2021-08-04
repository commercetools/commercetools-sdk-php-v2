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
 * @extends MessagePayloadCollection<LineItemStateTransitionMessagePayload>
 * @method LineItemStateTransitionMessagePayload current()
 * @method LineItemStateTransitionMessagePayload end()
 * @method LineItemStateTransitionMessagePayload at($offset)
 */
class LineItemStateTransitionMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert LineItemStateTransitionMessagePayload $value
     * @psalm-param LineItemStateTransitionMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return LineItemStateTransitionMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof LineItemStateTransitionMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?LineItemStateTransitionMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?LineItemStateTransitionMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var LineItemStateTransitionMessagePayload $data */
                $data = LineItemStateTransitionMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
