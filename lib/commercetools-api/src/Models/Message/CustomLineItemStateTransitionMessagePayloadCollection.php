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
 * @extends MapperSequence<CustomLineItemStateTransitionMessagePayload>
 * @method CustomLineItemStateTransitionMessagePayload current()
 * @method CustomLineItemStateTransitionMessagePayload at($offset)
 */
class CustomLineItemStateTransitionMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomLineItemStateTransitionMessagePayload $value
     * @psalm-param CustomLineItemStateTransitionMessagePayload|stdClass $value
     * @return CustomLineItemStateTransitionMessagePayloadCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CustomLineItemStateTransitionMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomLineItemStateTransitionMessagePayload
     */
    protected function mapper()
    {
        return function(int $index): ?CustomLineItemStateTransitionMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomLineItemStateTransitionMessagePayloadModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}