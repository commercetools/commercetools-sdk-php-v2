<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MessageDelivery>
 * @method MessageDelivery current()
 * @method MessageDelivery at($offset)
 */
class MessageDeliveryCollection extends MapperSequence
{
    /**
     * @psalm-assert MessageDelivery $value
     * @psalm-param MessageDelivery|stdClass $value
     * @return MessageDeliveryCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof MessageDelivery) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MessageDelivery
     */
    protected function mapper()
    {
        return function(int $index): ?MessageDelivery {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MessageDeliveryModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}