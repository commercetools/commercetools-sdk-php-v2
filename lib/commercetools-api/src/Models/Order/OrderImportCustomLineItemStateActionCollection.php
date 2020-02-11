<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderImportCustomLineItemStateAction>
 * @method OrderImportCustomLineItemStateAction current()
 * @method OrderImportCustomLineItemStateAction at($offset)
 */
class OrderImportCustomLineItemStateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderImportCustomLineItemStateAction $value
     * @psalm-param OrderImportCustomLineItemStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderImportCustomLineItemStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderImportCustomLineItemStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderImportCustomLineItemStateAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderImportCustomLineItemStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderImportCustomLineItemStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
