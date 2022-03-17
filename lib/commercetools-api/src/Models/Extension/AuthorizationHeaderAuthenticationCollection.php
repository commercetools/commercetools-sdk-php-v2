<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Api\Models\Extension\HttpDestinationAuthenticationCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends HttpDestinationAuthenticationCollection<AuthorizationHeaderAuthentication>
 * @method AuthorizationHeaderAuthentication current()
 * @method AuthorizationHeaderAuthentication end()
 * @method AuthorizationHeaderAuthentication at($offset)
 */
class AuthorizationHeaderAuthenticationCollection extends HttpDestinationAuthenticationCollection
{
    /**
     * @psalm-assert AuthorizationHeaderAuthentication $value
     * @psalm-param AuthorizationHeaderAuthentication|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AuthorizationHeaderAuthenticationCollection
     */
    public function add($value)
    {
        if (!$value instanceof AuthorizationHeaderAuthentication) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AuthorizationHeaderAuthentication
     */
    protected function mapper()
    {
        return function (?int $index): ?AuthorizationHeaderAuthentication {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AuthorizationHeaderAuthentication $data */
                $data = AuthorizationHeaderAuthenticationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
