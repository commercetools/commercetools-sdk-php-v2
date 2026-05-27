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
 * @extends MessagePayloadCollection<InventoryEntryOutOfStockMessagePayload>
 * @method InventoryEntryOutOfStockMessagePayload current()
 * @method InventoryEntryOutOfStockMessagePayload end()
 * @method InventoryEntryOutOfStockMessagePayload at($offset)
 */
class InventoryEntryOutOfStockMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert InventoryEntryOutOfStockMessagePayload $value
     * @psalm-param InventoryEntryOutOfStockMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryEntryOutOfStockMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntryOutOfStockMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntryOutOfStockMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?InventoryEntryOutOfStockMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InventoryEntryOutOfStockMessagePayload $data */
                $data = InventoryEntryOutOfStockMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
