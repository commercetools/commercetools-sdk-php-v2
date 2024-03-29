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
 * @extends MessageCollection<InventoryEntryCreatedMessage>
 * @method InventoryEntryCreatedMessage current()
 * @method InventoryEntryCreatedMessage end()
 * @method InventoryEntryCreatedMessage at($offset)
 */
class InventoryEntryCreatedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert InventoryEntryCreatedMessage $value
     * @psalm-param InventoryEntryCreatedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryEntryCreatedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntryCreatedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntryCreatedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?InventoryEntryCreatedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InventoryEntryCreatedMessage $data */
                $data = InventoryEntryCreatedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
