<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ParcelItemsUpdatedMessagePayload>
 *
 * @method ParcelItemsUpdatedMessagePayload current()
 * @method ParcelItemsUpdatedMessagePayload at($offset)
 */
class ParcelItemsUpdatedMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert ParcelItemsUpdatedMessagePayload $value
     * @psalm-param ParcelItemsUpdatedMessagePayload|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ParcelItemsUpdatedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ParcelItemsUpdatedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ParcelItemsUpdatedMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?ParcelItemsUpdatedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ParcelItemsUpdatedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
