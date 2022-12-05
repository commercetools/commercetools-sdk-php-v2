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
 * @extends ErrorResponseCollection<AuthErrorResponse>
 * @method AuthErrorResponse current()
 * @method AuthErrorResponse end()
 * @method AuthErrorResponse at($offset)
 */
class AuthErrorResponseCollection extends ErrorResponseCollection
{
    /**
     * @psalm-assert AuthErrorResponse $value
     * @psalm-param AuthErrorResponse|stdClass $value
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
     * @psalm-return callable(int):?AuthErrorResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?AuthErrorResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AuthErrorResponse $data */
                $data = AuthErrorResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
