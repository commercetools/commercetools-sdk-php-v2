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
 * @extends MapperSequence<MyCartSetCountryAction>
 * @method MyCartSetCountryAction current()
 * @method MyCartSetCountryAction at($offset)
 */
class MyCartSetCountryActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCartSetCountryAction $value
     * @psalm-param MyCartSetCountryAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCartSetCountryActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartSetCountryAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartSetCountryAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCartSetCountryAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCartSetCountryActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
