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
 * @extends ErrorObjectCollection<ValidityLockConflictError>
 * @method ValidityLockConflictError current()
 * @method ValidityLockConflictError end()
 * @method ValidityLockConflictError at($offset)
 */
class ValidityLockConflictErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert ValidityLockConflictError $value
     * @psalm-param ValidityLockConflictError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ValidityLockConflictErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof ValidityLockConflictError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ValidityLockConflictError
     */
    protected function mapper()
    {
        return function (?int $index): ?ValidityLockConflictError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ValidityLockConflictError $data */
                $data = ValidityLockConflictErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
