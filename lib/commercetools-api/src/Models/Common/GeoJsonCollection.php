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
 * @extends MapperSequence<GeoJson>
 *
 * @method GeoJson current()
 * @method GeoJson at($offset)
 */
class GeoJsonCollection extends MapperSequence
{
    /**
     * @psalm-assert GeoJson $value
     * @psalm-param GeoJson|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return GeoJsonCollection
     */
    public function add($value)
    {
        if (!$value instanceof GeoJson) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GeoJson
     */
    protected function mapper()
    {
        return function (int $index): ?GeoJson {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = GeoJsonModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
