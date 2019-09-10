<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<LineItemStateTransitionMessagePayload>
 * @method LineItemStateTransitionMessagePayload current()
 * @method LineItemStateTransitionMessagePayload at($offset)
 */
class LineItemStateTransitionMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert LineItemStateTransitionMessagePayload $value
     * @psalm-param LineItemStateTransitionMessagePayload|stdClass $value
     * @return LineItemStateTransitionMessagePayloadCollection
     * @throws InvalidArgumentException
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
        return function(int $index): ?LineItemStateTransitionMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = LineItemStateTransitionMessagePayloadModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}