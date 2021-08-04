<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Order\OrderUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderUpdateActionCollection<OrderImportLineItemStateAction>
 * @method OrderImportLineItemStateAction current()
 * @method OrderImportLineItemStateAction end()
 * @method OrderImportLineItemStateAction at($offset)
 */
class OrderImportLineItemStateActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderImportLineItemStateAction $value
     * @psalm-param OrderImportLineItemStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderImportLineItemStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderImportLineItemStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderImportLineItemStateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderImportLineItemStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderImportLineItemStateAction $data */
                $data = OrderImportLineItemStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
