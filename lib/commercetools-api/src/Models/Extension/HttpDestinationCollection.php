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
 * @extends ExtensionDestinationCollection<HttpDestination>
 * @method HttpDestination current()
 * @method HttpDestination end()
 * @method HttpDestination at($offset)
 */
class HttpDestinationCollection extends ExtensionDestinationCollection
{
    /**
     * @psalm-assert HttpDestination $value
     * @psalm-param HttpDestination|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return HttpDestinationCollection
     */
    public function add($value)
    {
        if (!$value instanceof HttpDestination) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?HttpDestination
     */
    protected function mapper()
    {
        return function (?int $index): ?HttpDestination {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var HttpDestination $data */
                $data = HttpDestinationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
