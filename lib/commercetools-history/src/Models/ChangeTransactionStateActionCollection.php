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
 * @extends MapperSequence<ChangeTransactionStateAction>
 * @method ChangeTransactionStateAction current()
 * @method ChangeTransactionStateAction at($offset)
 */
class ChangeTransactionStateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeTransactionStateAction $value
     * @psalm-param ChangeTransactionStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeTransactionStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeTransactionStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeTransactionStateAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeTransactionStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeTransactionStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
