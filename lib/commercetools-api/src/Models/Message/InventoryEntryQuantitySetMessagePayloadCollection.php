<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessagePayloadCollection<InventoryEntryQuantitySetMessagePayload>
 * @method InventoryEntryQuantitySetMessagePayload current()
 * @method InventoryEntryQuantitySetMessagePayload at($offset)
 */
class InventoryEntryQuantitySetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert InventoryEntryQuantitySetMessagePayload $value
     * @psalm-param InventoryEntryQuantitySetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryEntryQuantitySetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntryQuantitySetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntryQuantitySetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?InventoryEntryQuantitySetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InventoryEntryQuantitySetMessagePayload $data */
                $data = InventoryEntryQuantitySetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
