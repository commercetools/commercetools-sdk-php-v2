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
 * @extends MessageCollection<InventoryEntryDeletedMessage>
 * @method InventoryEntryDeletedMessage current()
 * @method InventoryEntryDeletedMessage at($offset)
 */
class InventoryEntryDeletedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert InventoryEntryDeletedMessage $value
     * @psalm-param InventoryEntryDeletedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryEntryDeletedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntryDeletedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntryDeletedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?InventoryEntryDeletedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InventoryEntryDeletedMessage $data */
                $data = InventoryEntryDeletedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
