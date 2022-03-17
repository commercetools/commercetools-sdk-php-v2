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
 * @template T of HttpDestinationAuthentication
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method HttpDestinationAuthentication current()
 * @method HttpDestinationAuthentication end()
 * @method HttpDestinationAuthentication at($offset)
 */
class HttpDestinationAuthenticationCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return HttpDestinationAuthenticationCollection
     */
    public function add($value)
    {
        if (!$value instanceof HttpDestinationAuthentication) {
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
        return function (?int $index): ?HttpDestinationAuthentication {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = HttpDestinationAuthenticationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
