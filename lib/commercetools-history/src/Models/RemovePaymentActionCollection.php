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
 * @extends MapperSequence<RemovePaymentAction>
 * @method RemovePaymentAction current()
 * @method RemovePaymentAction at($offset)
 */
class RemovePaymentActionCollection extends MapperSequence
{
    /**
     * @psalm-assert RemovePaymentAction $value
     * @psalm-param RemovePaymentAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemovePaymentActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemovePaymentAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemovePaymentAction
     */
    protected function mapper()
    {
        return function (int $index): ?RemovePaymentAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemovePaymentActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
