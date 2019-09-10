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
 * @extends MapperSequence<OrderImportLineItemStateAction>
 *
 * @method OrderImportLineItemStateAction current()
 * @method OrderImportLineItemStateAction at($offset)
 */
class OrderImportLineItemStateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderImportLineItemStateAction $value
     * @psalm-param OrderImportLineItemStateAction|stdClass $value
     *
     * @param mixed $value
     *
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
        return function (int $index): ?OrderImportLineItemStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderImportLineItemStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
