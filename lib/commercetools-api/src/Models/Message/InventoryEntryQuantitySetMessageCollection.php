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
 * @extends MessageCollection<InventoryEntryQuantitySetMessage>
 * @method InventoryEntryQuantitySetMessage current()
 * @method InventoryEntryQuantitySetMessage at($offset)
 */
class InventoryEntryQuantitySetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert InventoryEntryQuantitySetMessage $value
     * @psalm-param InventoryEntryQuantitySetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryEntryQuantitySetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntryQuantitySetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntryQuantitySetMessage
     */
    protected function mapper()
    {
        return function (int $index): ?InventoryEntryQuantitySetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InventoryEntryQuantitySetMessage $data */
                $data = InventoryEntryQuantitySetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
