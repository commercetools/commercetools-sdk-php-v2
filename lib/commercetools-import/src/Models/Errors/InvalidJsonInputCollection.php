<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Errors;

use Shared\Base\MapperSequence;
use Shared\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<InvalidJsonInput>
 * @method InvalidJsonInput current()
 * @method InvalidJsonInput at($offset)
 */
class InvalidJsonInputCollection extends MapperSequence
{
    /**
     * @psalm-assert InvalidJsonInput $value
     * @psalm-param InvalidJsonInput|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InvalidJsonInputCollection
     */
    public function add($value)
    {
        if (!$value instanceof InvalidJsonInput) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InvalidJsonInput
     */
    protected function mapper()
    {
        return function (int $index): ?InvalidJsonInput {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = InvalidJsonInputModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
