<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<GeoJsonPoint>
 *
 * @method GeoJsonPoint current()
 * @method GeoJsonPoint at($offset)
 */
class GeoJsonPointCollection extends MapperSequence
{
    /**
     * @psalm-assert GeoJsonPoint $value
     * @psalm-param GeoJsonPoint|stdClass $value
     *
     * @param mixed $value
     *
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
                $data = GeoJsonPointModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
