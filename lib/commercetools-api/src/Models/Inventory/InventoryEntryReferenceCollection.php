<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<InventoryEntryReference>
 * @method InventoryEntryReference current()
 * @method InventoryEntryReference at($offset)
 */
class InventoryEntryReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert InventoryEntryReference $value
     * @psalm-param InventoryEntryReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryEntryReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntryReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntryReference
     */
    protected function mapper()
    {
        return function (int $index): ?InventoryEntryReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InventoryEntryReference $data */
                $data = InventoryEntryReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
