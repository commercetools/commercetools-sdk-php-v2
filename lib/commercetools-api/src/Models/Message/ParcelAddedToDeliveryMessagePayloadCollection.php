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
 * @extends MapperSequence<ParcelAddedToDeliveryMessagePayload>
 * @method ParcelAddedToDeliveryMessagePayload current()
 * @method ParcelAddedToDeliveryMessagePayload at($offset)
 */
class ParcelAddedToDeliveryMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert ParcelAddedToDeliveryMessagePayload $value
     * @psalm-param ParcelAddedToDeliveryMessagePayload|stdClass $value
     * @return ParcelAddedToDeliveryMessagePayloadCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ParcelAddedToDeliveryMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ParcelAddedToDeliveryMessagePayload
     */
    protected function mapper()
    {
        return function(int $index): ?ParcelAddedToDeliveryMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ParcelAddedToDeliveryMessagePayloadModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}