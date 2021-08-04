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
 * @template T of ExtensionDestination
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method ExtensionDestination current()
 * @method ExtensionDestination end()
 * @method ExtensionDestination at($offset)
 */
class ExtensionDestinationCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExtensionDestinationCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionDestination) {
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
        return function (?int $index): ?ExtensionDestination {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = ExtensionDestinationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
