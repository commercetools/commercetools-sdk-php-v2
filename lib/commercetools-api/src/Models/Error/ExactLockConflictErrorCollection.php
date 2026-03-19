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
 * @extends ErrorObjectCollection<ExactLockConflictError>
 * @method ExactLockConflictError current()
 * @method ExactLockConflictError end()
 * @method ExactLockConflictError at($offset)
 */
class ExactLockConflictErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert ExactLockConflictError $value
     * @psalm-param ExactLockConflictError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExactLockConflictErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExactLockConflictError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExactLockConflictError
     */
    protected function mapper()
    {
        return function (?int $index): ?ExactLockConflictError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ExactLockConflictError $data */
                $data = ExactLockConflictErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
