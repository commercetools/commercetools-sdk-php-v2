<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\History\Models\Common\GeoJsonCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends GeoJsonCollection<GeoLocation>
 * @method GeoLocation current()
 * @method GeoLocation end()
 * @method GeoLocation at($offset)
 */
class GeoLocationCollection extends GeoJsonCollection
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
        return function (?int $index): ?GeoLocation {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GeoLocation $data */
                $data = GeoLocationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
