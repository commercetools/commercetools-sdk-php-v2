<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderEditUpdateAction>
 *
 * @method OrderEditUpdateAction current()
 * @method OrderEditUpdateAction at($offset)
 */
class OrderEditUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderEditUpdateAction $value
     * @psalm-param OrderEditUpdateAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return OrderEditUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderEditUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderEditUpdateAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderEditUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderEditUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
