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
 * @extends MapperSequence<ChangeTransactionTimestampAction>
 * @method ChangeTransactionTimestampAction current()
 * @method ChangeTransactionTimestampAction at($offset)
 */
class ChangeTransactionTimestampActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeTransactionTimestampAction $value
     * @psalm-param ChangeTransactionTimestampAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeTransactionTimestampActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeTransactionTimestampAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeTransactionTimestampAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeTransactionTimestampAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeTransactionTimestampActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
