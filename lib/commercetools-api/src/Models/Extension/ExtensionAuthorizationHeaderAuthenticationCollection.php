<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Api\Models\Extension\ExtensionHttpDestinationAuthenticationCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ExtensionHttpDestinationAuthenticationCollection<ExtensionAuthorizationHeaderAuthentication>
 * @method ExtensionAuthorizationHeaderAuthentication current()
 * @method ExtensionAuthorizationHeaderAuthentication end()
 * @method ExtensionAuthorizationHeaderAuthentication at($offset)
 */
class ExtensionAuthorizationHeaderAuthenticationCollection extends ExtensionHttpDestinationAuthenticationCollection
{
    /**
     * @psalm-assert ExtensionAuthorizationHeaderAuthentication $value
     * @psalm-param ExtensionAuthorizationHeaderAuthentication|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExtensionAuthorizationHeaderAuthenticationCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionAuthorizationHeaderAuthentication) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExtensionAuthorizationHeaderAuthentication
     */
    protected function mapper()
    {
        return function (?int $index): ?ExtensionAuthorizationHeaderAuthentication {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ExtensionAuthorizationHeaderAuthentication $data */
                $data = ExtensionAuthorizationHeaderAuthenticationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
