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
 * @extends MapperSequence<ChangeLocalizedEnumValueOrderAction>
 * @method ChangeLocalizedEnumValueOrderAction current()
 * @method ChangeLocalizedEnumValueOrderAction at($offset)
 */
class ChangeLocalizedEnumValueOrderActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeLocalizedEnumValueOrderAction $value
     * @psalm-param ChangeLocalizedEnumValueOrderAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeLocalizedEnumValueOrderActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeLocalizedEnumValueOrderAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeLocalizedEnumValueOrderAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeLocalizedEnumValueOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeLocalizedEnumValueOrderActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
