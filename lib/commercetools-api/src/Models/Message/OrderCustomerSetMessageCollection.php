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
 * @extends MapperSequence<OrderCustomerSetMessage>
 * @method OrderCustomerSetMessage current()
 * @method OrderCustomerSetMessage at($offset)
 */
class OrderCustomerSetMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderCustomerSetMessage $value
     * @psalm-param OrderCustomerSetMessage|stdClass $value
     * @return OrderCustomerSetMessageCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof OrderCustomerSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderCustomerSetMessage
     */
    protected function mapper()
    {
        return function(int $index): ?OrderCustomerSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderCustomerSetMessageModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}