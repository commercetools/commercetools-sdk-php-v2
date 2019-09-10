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
 * @extends MapperSequence<CustomerAddressRemovedMessagePayload>
 * @method CustomerAddressRemovedMessagePayload current()
 * @method CustomerAddressRemovedMessagePayload at($offset)
 */
class CustomerAddressRemovedMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerAddressRemovedMessagePayload $value
     * @psalm-param CustomerAddressRemovedMessagePayload|stdClass $value
     * @return CustomerAddressRemovedMessagePayloadCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CustomerAddressRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerAddressRemovedMessagePayload
     */
    protected function mapper()
    {
        return function(int $index): ?CustomerAddressRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerAddressRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}