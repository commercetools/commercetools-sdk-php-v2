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
 * @extends MapperSequence<ParcelItemsUpdatedMessage>
 *
 * @method ParcelItemsUpdatedMessage current()
 * @method ParcelItemsUpdatedMessage at($offset)
 */
class ParcelItemsUpdatedMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert ParcelItemsUpdatedMessage $value
     * @psalm-param ParcelItemsUpdatedMessage|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ParcelItemsUpdatedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ParcelItemsUpdatedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ParcelItemsUpdatedMessage
     */
    protected function mapper()
    {
        return function (int $index): ?ParcelItemsUpdatedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ParcelItemsUpdatedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
