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
 * @extends MapperSequence<InventoryEntryCreatedMessagePayload>
 * @method InventoryEntryCreatedMessagePayload current()
 * @method InventoryEntryCreatedMessagePayload at($offset)
 */
class InventoryEntryCreatedMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert InventoryEntryCreatedMessagePayload $value
     * @psalm-param InventoryEntryCreatedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryEntryCreatedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntryCreatedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntryCreatedMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?InventoryEntryCreatedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = InventoryEntryCreatedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
