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
 * @extends MapperSequence<ExtensionHttpDestinationAuthentication>
 *
 * @method ExtensionHttpDestinationAuthentication current()
 * @method ExtensionHttpDestinationAuthentication at($offset)
 */
class ExtensionHttpDestinationAuthenticationCollection extends MapperSequence
{
    /**
     * @psalm-assert ExtensionHttpDestinationAuthentication $value
     * @psalm-param ExtensionHttpDestinationAuthentication|stdClass $value
     *
     * @param mixed $value
     *
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
     * @psalm-return callable(int):?ExtensionHttpDestinationAuthentication
     */
    protected function mapper()
    {
        return function (int $index): ?ExtensionHttpDestinationAuthentication {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ExtensionHttpDestinationAuthenticationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
