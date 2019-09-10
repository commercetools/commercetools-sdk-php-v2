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
 * @extends MapperSequence<OrderEditAppliedMessagePayload>
 * @method OrderEditAppliedMessagePayload current()
 * @method OrderEditAppliedMessagePayload at($offset)
 */
class OrderEditAppliedMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderEditAppliedMessagePayload $value
     * @psalm-param OrderEditAppliedMessagePayload|stdClass $value
     * @return OrderEditAppliedMessagePayloadCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof OrderEditAppliedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderEditAppliedMessagePayload
     */
    protected function mapper()
    {
        return function(int $index): ?OrderEditAppliedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderEditAppliedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}