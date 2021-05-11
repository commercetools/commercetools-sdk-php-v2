<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<ChangeTransactionTimestampChange>
 * @method ChangeTransactionTimestampChange current()
 * @method ChangeTransactionTimestampChange at($offset)
 */
class ChangeTransactionTimestampChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeTransactionTimestampChange $value
     * @psalm-param ChangeTransactionTimestampChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeTransactionTimestampChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeTransactionTimestampChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeTransactionTimestampChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeTransactionTimestampChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeTransactionTimestampChange $data */
                $data = ChangeTransactionTimestampChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
