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
 * @extends MapperSequence<InternalConstraintViolatedError>
 * @method InternalConstraintViolatedError current()
 * @method InternalConstraintViolatedError at($offset)
 */
class InternalConstraintViolatedErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert InternalConstraintViolatedError $value
     * @psalm-param InternalConstraintViolatedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InternalConstraintViolatedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof InternalConstraintViolatedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InternalConstraintViolatedError
     */
    protected function mapper()
    {
        return function (int $index): ?InternalConstraintViolatedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = InternalConstraintViolatedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
