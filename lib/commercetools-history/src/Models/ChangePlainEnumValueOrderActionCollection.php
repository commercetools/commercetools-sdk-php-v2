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
 * @extends MapperSequence<ChangePlainEnumValueOrderAction>
 * @method ChangePlainEnumValueOrderAction current()
 * @method ChangePlainEnumValueOrderAction at($offset)
 */
class ChangePlainEnumValueOrderActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangePlainEnumValueOrderAction $value
     * @psalm-param ChangePlainEnumValueOrderAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangePlainEnumValueOrderActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangePlainEnumValueOrderAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangePlainEnumValueOrderAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangePlainEnumValueOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangePlainEnumValueOrderActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
