<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Errors\ErrorObjectCollection;
use stdClass;

/**
 * @extends ErrorObjectCollection<InvalidOperation>
 * @method InvalidOperation current()
 * @method InvalidOperation at($offset)
 */
class InvalidOperationCollection extends ErrorObjectCollection
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
        return function (?int $index): ?InvalidOperation {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InvalidOperation $data */
                $data = InvalidOperationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
