<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Error\ErrorResponseCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of AuthErrorResponse
 * @extends ErrorResponseCollection<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method AuthErrorResponse current()
 * @method AuthErrorResponse end()
 * @method AuthErrorResponse at($offset)
 */
class AuthErrorResponseCollection extends ErrorResponseCollection
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AuthErrorResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof AuthErrorResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (?int $index): ?AuthErrorResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = AuthErrorResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
