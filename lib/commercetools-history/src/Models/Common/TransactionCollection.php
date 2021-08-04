<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<Transaction>
 * @method Transaction current()
 * @method Transaction at($offset)
 */
class TransactionCollection extends MapperSequence
{
    /**
     * @psalm-assert Transaction $value
     * @psalm-param Transaction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TransactionCollection
     */
    public function add($value)
    {
        if (!$value instanceof Transaction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Transaction
     */
    protected function mapper()
    {
        return function (?int $index): ?Transaction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var Transaction $data */
                $data = TransactionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
