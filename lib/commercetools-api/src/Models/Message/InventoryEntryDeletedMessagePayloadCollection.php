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
 * @extends MessagePayloadCollection<InventoryEntryDeletedMessagePayload>
 * @method InventoryEntryDeletedMessagePayload current()
 * @method InventoryEntryDeletedMessagePayload at($offset)
 */
class InventoryEntryDeletedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert InventoryEntryDeletedMessagePayload $value
     * @psalm-param InventoryEntryDeletedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryEntryDeletedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntryDeletedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntryDeletedMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?InventoryEntryDeletedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InventoryEntryDeletedMessagePayload $data */
                $data = InventoryEntryDeletedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
