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
 * @extends MapperSequence<CustomerAddressAddedMessagePayload>
 * @method CustomerAddressAddedMessagePayload current()
 * @method CustomerAddressAddedMessagePayload at($offset)
 */
class CustomerAddressAddedMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerAddressAddedMessagePayload $value
     * @psalm-param CustomerAddressAddedMessagePayload|stdClass $value
     * @return CustomerAddressAddedMessagePayloadCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CustomerAddressAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerAddressAddedMessagePayload
     */
    protected function mapper()
    {
        return function(int $index): ?CustomerAddressAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerAddressAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}