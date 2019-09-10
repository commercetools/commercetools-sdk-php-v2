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
 * @extends MapperSequence<OrderSetLocaleAction>
 *
 * @method OrderSetLocaleAction current()
 * @method OrderSetLocaleAction at($offset)
 */
class OrderSetLocaleActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderSetLocaleAction $value
     * @psalm-param OrderSetLocaleAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return OrderSetLocaleActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetLocaleAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetLocaleAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderSetLocaleAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderSetLocaleActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
