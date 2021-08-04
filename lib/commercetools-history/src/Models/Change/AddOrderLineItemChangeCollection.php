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
 * @extends ChangeCollection<AddOrderLineItemChange>
 * @method AddOrderLineItemChange current()
 * @method AddOrderLineItemChange end()
 * @method AddOrderLineItemChange at($offset)
 */
class AddOrderLineItemChangeCollection extends ChangeCollection
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
        return function (?int $index): ?AddOrderLineItemChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AddOrderLineItemChange $data */
                $data = AddOrderLineItemChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
