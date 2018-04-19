<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class GeoJsonCollectionModel extends JsonCollection implements GeoJsonCollection
{

    /**
     * @param GeoJson $value
     * @return GeoJsonCollection
     */
    public function add($value) {
        if (!$value instanceof GeoJson) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return GeoJson
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof GeoJson) {
            $resolvedClass = $this->resolveDiscriminator(GeoJson::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
