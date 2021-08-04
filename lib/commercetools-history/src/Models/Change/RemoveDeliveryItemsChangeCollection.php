<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<RemoveDeliveryItemsChange>
 * @method RemoveDeliveryItemsChange current()
 * @method RemoveDeliveryItemsChange at($offset)
 */
class RemoveDeliveryItemsChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert RemoveDeliveryItemsChange $value
     * @psalm-param RemoveDeliveryItemsChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveDeliveryItemsChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveDeliveryItemsChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveDeliveryItemsChange
     */
    protected function mapper()
    {
        return function (?int $index): ?RemoveDeliveryItemsChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RemoveDeliveryItemsChange $data */
                $data = RemoveDeliveryItemsChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
