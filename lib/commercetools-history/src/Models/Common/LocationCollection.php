<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<Location>
 * @method Location current()
 * @method Location at($offset)
 */
class LocationCollection extends MapperSequence
{
    /**
     * @psalm-assert Location $value
     * @psalm-param Location|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return LocationCollection
     */
    public function add($value)
    {
        if (!$value instanceof Location) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Location
     */
    protected function mapper()
    {
        return function (?int $index): ?Location {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var Location $data */
                $data = LocationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
