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
 * @extends MessagePayloadCollection<InventoryEntrySafetyStockMessagePayload>
 * @method InventoryEntrySafetyStockMessagePayload current()
 * @method InventoryEntrySafetyStockMessagePayload end()
 * @method InventoryEntrySafetyStockMessagePayload at($offset)
 */
class InventoryEntrySafetyStockMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert InventoryEntrySafetyStockMessagePayload $value
     * @psalm-param InventoryEntrySafetyStockMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryEntrySafetyStockMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntrySafetyStockMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntrySafetyStockMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?InventoryEntrySafetyStockMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InventoryEntrySafetyStockMessagePayload $data */
                $data = InventoryEntrySafetyStockMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
