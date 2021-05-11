<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Error\ErrorObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ErrorObjectCollection<InternalConstraintViolatedError>
 * @method InternalConstraintViolatedError current()
 * @method InternalConstraintViolatedError at($offset)
 */
class InternalConstraintViolatedErrorCollection extends ErrorObjectCollection
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
                /** @var InternalConstraintViolatedError $data */
                $data = InternalConstraintViolatedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
