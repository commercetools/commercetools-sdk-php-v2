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
 * @extends MapperSequence<AddPaymentAction>
 * @method AddPaymentAction current()
 * @method AddPaymentAction at($offset)
 */
class AddPaymentActionCollection extends MapperSequence
{
    /**
     * @psalm-assert AddPaymentAction $value
     * @psalm-param AddPaymentAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddPaymentActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddPaymentAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddPaymentAction
     */
    protected function mapper()
    {
        return function (int $index): ?AddPaymentAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddPaymentActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
