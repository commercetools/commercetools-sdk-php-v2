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
 * @extends MapperSequence<InvalidJsonInputError>
 *
 * @method InvalidJsonInputError current()
 * @method InvalidJsonInputError at($offset)
 */
class InvalidJsonInputErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert InvalidJsonInputError $value
     * @psalm-param InvalidJsonInputError|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return InvalidJsonInputErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof InvalidJsonInputError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InvalidJsonInputError
     */
    protected function mapper()
    {
        return function (int $index): ?InvalidJsonInputError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = InvalidJsonInputErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
