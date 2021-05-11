<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Api\Models\Common\ResourceIdentifierCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ResourceIdentifierCollection<InventoryEntryResourceIdentifier>
 * @method InventoryEntryResourceIdentifier current()
 * @method InventoryEntryResourceIdentifier at($offset)
 */
class InventoryEntryResourceIdentifierCollection extends ResourceIdentifierCollection
{
    /**
     * @psalm-assert InventoryEntryResourceIdentifier $value
     * @psalm-param InventoryEntryResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryEntryResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntryResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntryResourceIdentifier
     */
    protected function mapper()
    {
        return function (int $index): ?InventoryEntryResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InventoryEntryResourceIdentifier $data */
                $data = InventoryEntryResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
