<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<InventoryEntrySafetyStockMessage>
 * @method InventoryEntrySafetyStockMessage current()
 * @method InventoryEntrySafetyStockMessage end()
 * @method InventoryEntrySafetyStockMessage at($offset)
 */
class InventoryEntrySafetyStockMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert InventoryEntrySafetyStockMessage $value
     * @psalm-param InventoryEntrySafetyStockMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryEntrySafetyStockMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntrySafetyStockMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntrySafetyStockMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?InventoryEntrySafetyStockMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InventoryEntrySafetyStockMessage $data */
                $data = InventoryEntrySafetyStockMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
