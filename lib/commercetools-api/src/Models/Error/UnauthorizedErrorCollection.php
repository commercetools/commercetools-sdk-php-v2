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
 * @extends ErrorObjectCollection<UnauthorizedError>
 * @method UnauthorizedError current()
 * @method UnauthorizedError end()
 * @method UnauthorizedError at($offset)
 */
class UnauthorizedErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert UnauthorizedError $value
     * @psalm-param UnauthorizedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return UnauthorizedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof UnauthorizedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?UnauthorizedError
     */
    protected function mapper()
    {
        return function (?int $index): ?UnauthorizedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var UnauthorizedError $data */
                $data = UnauthorizedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
