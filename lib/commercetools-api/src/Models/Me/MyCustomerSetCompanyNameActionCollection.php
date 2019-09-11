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
 * @extends MapperSequence<MyCustomerSetCompanyNameAction>
 *
 * @method MyCustomerSetCompanyNameAction current()
 * @method MyCustomerSetCompanyNameAction at($offset)
 */
class MyCustomerSetCompanyNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCustomerSetCompanyNameAction $value
     * @psalm-param MyCustomerSetCompanyNameAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return MyCustomerSetCompanyNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomerSetCompanyNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomerSetCompanyNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCustomerSetCompanyNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCustomerSetCompanyNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
