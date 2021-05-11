<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Api\Models\Extension\ExtensionDestinationCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ExtensionDestinationCollection<ExtensionHttpDestination>
 * @method ExtensionHttpDestination current()
 * @method ExtensionHttpDestination at($offset)
 */
class ExtensionHttpDestinationCollection extends ExtensionDestinationCollection
{
    /**
     * @psalm-assert ExtensionHttpDestination $value
     * @psalm-param ExtensionHttpDestination|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExtensionHttpDestinationCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionHttpDestination) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExtensionHttpDestination
     */
    protected function mapper()
    {
        return function (int $index): ?ExtensionHttpDestination {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ExtensionHttpDestination $data */
                $data = ExtensionHttpDestinationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
