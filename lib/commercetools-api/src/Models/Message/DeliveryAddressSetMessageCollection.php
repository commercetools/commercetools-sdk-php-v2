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
 * @extends MapperSequence<DeliveryAddressSetMessage>
 * @method DeliveryAddressSetMessage current()
 * @method DeliveryAddressSetMessage at($offset)
 */
class DeliveryAddressSetMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert DeliveryAddressSetMessage $value
     * @psalm-param DeliveryAddressSetMessage|stdClass $value
     * @return DeliveryAddressSetMessageCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryAddressSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DeliveryAddressSetMessage
     */
    protected function mapper()
    {
        return function(int $index): ?DeliveryAddressSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DeliveryAddressSetMessageModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}