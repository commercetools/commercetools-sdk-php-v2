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
 * @extends MapperSequence<TransactionActionValue>
 * @method TransactionActionValue current()
 * @method TransactionActionValue at($offset)
 */
class TransactionActionValueCollection extends MapperSequence
{
    /**
     * @psalm-assert TransactionActionValue $value
     * @psalm-param TransactionActionValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TransactionActionValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof TransactionActionValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TransactionActionValue
     */
    protected function mapper()
    {
        return function (int $index): ?TransactionActionValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TransactionActionValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
