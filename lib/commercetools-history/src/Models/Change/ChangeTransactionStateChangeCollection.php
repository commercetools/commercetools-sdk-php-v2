<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ChangeTransactionStateChange>
 * @method ChangeTransactionStateChange current()
 * @method ChangeTransactionStateChange at($offset)
 */
class ChangeTransactionStateChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeTransactionStateChange $value
     * @psalm-param ChangeTransactionStateChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeTransactionStateChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeTransactionStateChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeTransactionStateChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeTransactionStateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeTransactionStateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
