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
 * @extends MapperSequence<ChangeTransactionInteractionIdChange>
 * @method ChangeTransactionInteractionIdChange current()
 * @method ChangeTransactionInteractionIdChange at($offset)
 */
class ChangeTransactionInteractionIdChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeTransactionInteractionIdChange $value
     * @psalm-param ChangeTransactionInteractionIdChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeTransactionInteractionIdChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeTransactionInteractionIdChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeTransactionInteractionIdChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeTransactionInteractionIdChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeTransactionInteractionIdChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
