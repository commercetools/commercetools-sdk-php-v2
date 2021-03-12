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
 * @extends MapperSequence<ChangePaymentStateAction>
 * @method ChangePaymentStateAction current()
 * @method ChangePaymentStateAction at($offset)
 */
class ChangePaymentStateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangePaymentStateAction $value
     * @psalm-param ChangePaymentStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangePaymentStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangePaymentStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangePaymentStateAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangePaymentStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangePaymentStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
