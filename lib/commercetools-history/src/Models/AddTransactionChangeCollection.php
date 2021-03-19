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
 * @extends MapperSequence<AddTransactionChange>
 * @method AddTransactionChange current()
 * @method AddTransactionChange at($offset)
 */
class AddTransactionChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert AddTransactionChange $value
     * @psalm-param AddTransactionChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddTransactionChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddTransactionChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddTransactionChange
     */
    protected function mapper()
    {
        return function (int $index): ?AddTransactionChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddTransactionChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
