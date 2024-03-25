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
 * @extends ErrorObjectCollection<LockedFieldError>
 * @method LockedFieldError current()
 * @method LockedFieldError end()
 * @method LockedFieldError at($offset)
 */
class LockedFieldErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert LockedFieldError $value
     * @psalm-param LockedFieldError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return LockedFieldErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof LockedFieldError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?LockedFieldError
     */
    protected function mapper()
    {
        return function (?int $index): ?LockedFieldError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var LockedFieldError $data */
                $data = LockedFieldErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
