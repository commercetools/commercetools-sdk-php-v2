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
 * @extends MapperSequence<ChangeEnumValueOrderAction>
 * @method ChangeEnumValueOrderAction current()
 * @method ChangeEnumValueOrderAction at($offset)
 */
class ChangeEnumValueOrderActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeEnumValueOrderAction $value
     * @psalm-param ChangeEnumValueOrderAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeEnumValueOrderActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeEnumValueOrderAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeEnumValueOrderAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeEnumValueOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeEnumValueOrderActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
