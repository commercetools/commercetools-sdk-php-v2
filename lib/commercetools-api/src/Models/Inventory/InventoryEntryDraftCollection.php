<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<InventoryEntryDraft>
 * @method InventoryEntryDraft current()
 * @method InventoryEntryDraft at($offset)
 */
class InventoryEntryDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert InventoryEntryDraft $value
     * @psalm-param InventoryEntryDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryEntryDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntryDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntryDraft
     */
    protected function mapper()
    {
        return function (int $index): ?InventoryEntryDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InventoryEntryDraft $data */
                $data = InventoryEntryDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
