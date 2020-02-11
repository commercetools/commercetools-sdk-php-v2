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
 * @extends MapperSequence<MyCartUpdateAction>
 * @method MyCartUpdateAction current()
 * @method MyCartUpdateAction at($offset)
 */
class MyCartUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCartUpdateAction $value
     * @psalm-param MyCartUpdateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCartUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartUpdateAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCartUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCartUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
