<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<TransactionChangeValue>
 * @method TransactionChangeValue current()
 * @method TransactionChangeValue end()
 * @method TransactionChangeValue at($offset)
 */
class TransactionChangeValueCollection extends MapperSequence
{
    /**
     * @psalm-assert TransactionChangeValue $value
     * @psalm-param TransactionChangeValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TransactionChangeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof TransactionChangeValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TransactionChangeValue
     */
    protected function mapper()
    {
        return function (?int $index): ?TransactionChangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TransactionChangeValue $data */
                $data = TransactionChangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
