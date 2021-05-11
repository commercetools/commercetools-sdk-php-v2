<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Common\GeoJsonCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends GeoJsonCollection<GeoJsonPoint>
 * @method GeoJsonPoint current()
 * @method GeoJsonPoint at($offset)
 */
class GeoJsonPointCollection extends GeoJsonCollection
{
    /**
     * @psalm-assert GeoJsonPoint $value
     * @psalm-param GeoJsonPoint|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GeoJsonPointCollection
     */
    public function add($value)
    {
        if (!$value instanceof GeoJsonPoint) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GeoJsonPoint
     */
    protected function mapper()
    {
        return function (int $index): ?GeoJsonPoint {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GeoJsonPoint $data */
                $data = GeoJsonPointModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
