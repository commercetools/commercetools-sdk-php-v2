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
 * @extends MapperSequence<MyCartSetCustomFieldAction>
 * @method MyCartSetCustomFieldAction current()
 * @method MyCartSetCustomFieldAction at($offset)
 */
class MyCartSetCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCartSetCustomFieldAction $value
     * @psalm-param MyCartSetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCartSetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartSetCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCartSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCartSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
