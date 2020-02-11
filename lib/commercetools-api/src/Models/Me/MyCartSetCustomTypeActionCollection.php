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
 * @extends MapperSequence<MyCartSetCustomTypeAction>
 * @method MyCartSetCustomTypeAction current()
 * @method MyCartSetCustomTypeAction at($offset)
 */
class MyCartSetCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCartSetCustomTypeAction $value
     * @psalm-param MyCartSetCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCartSetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartSetCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCartSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCartSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
