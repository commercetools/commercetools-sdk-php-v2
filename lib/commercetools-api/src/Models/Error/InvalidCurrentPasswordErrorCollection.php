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
 * @extends MapperSequence<InvalidCurrentPasswordError>
 * @method InvalidCurrentPasswordError current()
 * @method InvalidCurrentPasswordError at($offset)
 */
class InvalidCurrentPasswordErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert InvalidCurrentPasswordError $value
     * @psalm-param InvalidCurrentPasswordError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InvalidCurrentPasswordErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof InvalidCurrentPasswordError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InvalidCurrentPasswordError
     */
    protected function mapper()
    {
        return function (int $index): ?InvalidCurrentPasswordError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = InvalidCurrentPasswordErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
