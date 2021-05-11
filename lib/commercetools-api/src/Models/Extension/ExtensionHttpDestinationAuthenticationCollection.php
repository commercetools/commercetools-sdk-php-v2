<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of ExtensionHttpDestinationAuthentication
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T at($offset)
 * @method ExtensionHttpDestinationAuthentication current()
 * @method ExtensionHttpDestinationAuthentication at($offset)
 */
class ExtensionHttpDestinationAuthenticationCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExtensionHttpDestinationAuthenticationCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionHttpDestinationAuthentication) {
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
        return function (int $index): ?ExtensionHttpDestinationAuthentication {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = ExtensionHttpDestinationAuthenticationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
