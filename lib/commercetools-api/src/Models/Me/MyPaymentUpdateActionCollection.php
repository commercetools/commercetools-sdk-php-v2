<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MyPaymentUpdateAction>
 *
 * @method MyPaymentUpdateAction current()
 * @method MyPaymentUpdateAction at($offset)
 */
class MyPaymentUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyPaymentUpdateAction $value
     * @psalm-param MyPaymentUpdateAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return MyPaymentUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyPaymentUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyPaymentUpdateAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyPaymentUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyPaymentUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
