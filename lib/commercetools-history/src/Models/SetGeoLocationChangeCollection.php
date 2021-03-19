<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SetGeoLocationChange>
 * @method SetGeoLocationChange current()
 * @method SetGeoLocationChange at($offset)
 */
class SetGeoLocationChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetGeoLocationChange $value
     * @psalm-param SetGeoLocationChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetGeoLocationChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetGeoLocationChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetGeoLocationChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetGeoLocationChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetGeoLocationChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
