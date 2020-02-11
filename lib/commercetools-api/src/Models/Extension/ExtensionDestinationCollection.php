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
 * @extends MapperSequence<ExtensionDestination>
 * @method ExtensionDestination current()
 * @method ExtensionDestination at($offset)
 */
class ExtensionDestinationCollection extends MapperSequence
{
    /**
     * @psalm-assert ExtensionDestination $value
     * @psalm-param ExtensionDestination|stdClass $value
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
     * @psalm-return callable(int):?ExtensionDestination
     */
    protected function mapper()
    {
        return function (int $index): ?ExtensionDestination {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ExtensionDestinationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
