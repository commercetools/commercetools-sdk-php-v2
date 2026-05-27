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
 * @extends MessageCollection<InventoryEntryOutOfStockMessage>
 * @method InventoryEntryOutOfStockMessage current()
 * @method InventoryEntryOutOfStockMessage end()
 * @method InventoryEntryOutOfStockMessage at($offset)
 */
class InventoryEntryOutOfStockMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert InventoryEntryOutOfStockMessage $value
     * @psalm-param InventoryEntryOutOfStockMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryEntryOutOfStockMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntryOutOfStockMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntryOutOfStockMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?InventoryEntryOutOfStockMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InventoryEntryOutOfStockMessage $data */
                $data = InventoryEntryOutOfStockMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
