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
 * @extends MapperSequence<CustomerGroupSetMessage>
 * @method CustomerGroupSetMessage current()
 * @method CustomerGroupSetMessage at($offset)
 */
class CustomerGroupSetMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerGroupSetMessage $value
     * @psalm-param CustomerGroupSetMessage|stdClass $value
     * @return CustomerGroupSetMessageCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupSetMessage
     */
    protected function mapper()
    {
        return function(int $index): ?CustomerGroupSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerGroupSetMessageModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}