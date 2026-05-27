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
 * @extends MessagePayloadCollection<InventoryEntryReorderPointMessagePayload>
 * @method InventoryEntryReorderPointMessagePayload current()
 * @method InventoryEntryReorderPointMessagePayload end()
 * @method InventoryEntryReorderPointMessagePayload at($offset)
 */
class InventoryEntryReorderPointMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert InventoryEntryReorderPointMessagePayload $value
     * @psalm-param InventoryEntryReorderPointMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryEntryReorderPointMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntryReorderPointMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntryReorderPointMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?InventoryEntryReorderPointMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InventoryEntryReorderPointMessagePayload $data */
                $data = InventoryEntryReorderPointMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
