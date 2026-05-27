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
 * @extends MessageCollection<InventoryEntryReorderPointMessage>
 * @method InventoryEntryReorderPointMessage current()
 * @method InventoryEntryReorderPointMessage end()
 * @method InventoryEntryReorderPointMessage at($offset)
 */
class InventoryEntryReorderPointMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert InventoryEntryReorderPointMessage $value
     * @psalm-param InventoryEntryReorderPointMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryEntryReorderPointMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntryReorderPointMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntryReorderPointMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?InventoryEntryReorderPointMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InventoryEntryReorderPointMessage $data */
                $data = InventoryEntryReorderPointMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
