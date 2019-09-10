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
 * @extends MapperSequence<ParcelRemovedFromDeliveryMessage>
 * @method ParcelRemovedFromDeliveryMessage current()
 * @method ParcelRemovedFromDeliveryMessage at($offset)
 */
class ParcelRemovedFromDeliveryMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert ParcelRemovedFromDeliveryMessage $value
     * @psalm-param ParcelRemovedFromDeliveryMessage|stdClass $value
     * @return ParcelRemovedFromDeliveryMessageCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ParcelRemovedFromDeliveryMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ParcelRemovedFromDeliveryMessage
     */
    protected function mapper()
    {
        return function(int $index): ?ParcelRemovedFromDeliveryMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ParcelRemovedFromDeliveryMessageModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}