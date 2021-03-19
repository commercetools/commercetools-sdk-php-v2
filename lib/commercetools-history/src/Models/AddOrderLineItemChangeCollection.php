<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<AddOrderLineItemChange>
 * @method AddOrderLineItemChange current()
 * @method AddOrderLineItemChange at($offset)
 */
class AddOrderLineItemChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert AddOrderLineItemChange $value
     * @psalm-param AddOrderLineItemChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddOrderLineItemChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddOrderLineItemChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddOrderLineItemChange
     */
    protected function mapper()
    {
        return function (int $index): ?AddOrderLineItemChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddOrderLineItemChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
