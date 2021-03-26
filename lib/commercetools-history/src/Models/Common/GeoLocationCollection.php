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
 * @extends MapperSequence<GeoLocation>
 * @method GeoLocation current()
 * @method GeoLocation at($offset)
 */
class GeoLocationCollection extends MapperSequence
{
    /**
     * @psalm-assert GeoLocation $value
     * @psalm-param GeoLocation|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GeoLocationCollection
     */
    public function add($value)
    {
        if (!$value instanceof GeoLocation) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GeoLocation
     */
    protected function mapper()
    {
        return function (int $index): ?GeoLocation {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = GeoLocationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
