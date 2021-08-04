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
 * @template T of InventoryEntryUpdateAction
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method InventoryEntryUpdateAction current()
 * @method InventoryEntryUpdateAction end()
 * @method InventoryEntryUpdateAction at($offset)
 */
class InventoryEntryUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryEntryUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntryUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (?int $index): ?InventoryEntryUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = InventoryEntryUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
