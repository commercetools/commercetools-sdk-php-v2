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
 * @extends MapperSequence<OrderDeletedMessage>
 * @method OrderDeletedMessage current()
 * @method OrderDeletedMessage at($offset)
 */
class OrderDeletedMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderDeletedMessage $value
     * @psalm-param OrderDeletedMessage|stdClass $value
     * @return OrderDeletedMessageCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof OrderDeletedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderDeletedMessage
     */
    protected function mapper()
    {
        return function(int $index): ?OrderDeletedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderDeletedMessageModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}