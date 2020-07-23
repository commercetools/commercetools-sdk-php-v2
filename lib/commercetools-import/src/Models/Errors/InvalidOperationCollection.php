<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<InvalidOperation>
 * @method InvalidOperation current()
 * @method InvalidOperation at($offset)
 */
class InvalidOperationCollection extends MapperSequence
{
    /**
     * @psalm-assert InvalidOperation $value
     * @psalm-param InvalidOperation|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InvalidOperationCollection
     */
    public function add($value)
    {
        if (!$value instanceof InvalidOperation) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InvalidOperation
     */
    protected function mapper()
    {
        return function (int $index): ?InvalidOperation {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = InvalidOperationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
