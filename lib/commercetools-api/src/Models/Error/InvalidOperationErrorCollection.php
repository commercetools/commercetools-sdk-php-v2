<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<InvalidOperationError>
 *
 * @method InvalidOperationError current()
 * @method InvalidOperationError at($offset)
 */
class InvalidOperationErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert InvalidOperationError $value
     * @psalm-param InvalidOperationError|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return InvalidOperationErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof InvalidOperationError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InvalidOperationError
     */
    protected function mapper()
    {
        return function (int $index): ?InvalidOperationError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = InvalidOperationErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
