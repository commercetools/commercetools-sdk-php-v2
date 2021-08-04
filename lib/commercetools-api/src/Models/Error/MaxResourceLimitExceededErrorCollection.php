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
 * @extends ErrorObjectCollection<MaxResourceLimitExceededError>
 * @method MaxResourceLimitExceededError current()
 * @method MaxResourceLimitExceededError end()
 * @method MaxResourceLimitExceededError at($offset)
 */
class MaxResourceLimitExceededErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert MaxResourceLimitExceededError $value
     * @psalm-param MaxResourceLimitExceededError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MaxResourceLimitExceededErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof MaxResourceLimitExceededError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MaxResourceLimitExceededError
     */
    protected function mapper()
    {
        return function (?int $index): ?MaxResourceLimitExceededError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MaxResourceLimitExceededError $data */
                $data = MaxResourceLimitExceededErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
