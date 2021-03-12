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
 * @extends MapperSequence<AddTransactionAction>
 * @method AddTransactionAction current()
 * @method AddTransactionAction at($offset)
 */
class AddTransactionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert AddTransactionAction $value
     * @psalm-param AddTransactionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddTransactionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddTransactionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddTransactionAction
     */
    protected function mapper()
    {
        return function (int $index): ?AddTransactionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddTransactionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
