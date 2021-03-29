<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<RemoveOrderLineItemChange>
 * @method RemoveOrderLineItemChange current()
 * @method RemoveOrderLineItemChange at($offset)
 */
class RemoveOrderLineItemChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveOrderLineItemChange $value
     * @psalm-param RemoveOrderLineItemChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveOrderLineItemChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveOrderLineItemChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveOrderLineItemChange
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveOrderLineItemChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveOrderLineItemChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
