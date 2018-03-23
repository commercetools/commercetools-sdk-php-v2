<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonObjectModel;

use Commercetools\Types;

class GeoJsonModel extends JsonObjectModel implements GeoJson {
    const DISCRIMINATOR_VALUE = '';

    /**
     * @param array $data
     */
    public function __construct(array $data = []) {
        parent::__construct($data);
        $this->setType(static::DISCRIMINATOR_VALUE);
    }

    /**
     * @var string
     */
    protected $type;
    /**
     * @var array
     */
    protected $coordinates;

    /**
     * @return string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            $value = $this->raw(GeoJson::FIELD_TYPE);
            $value = (string)$value;
            $this->type = $value;
        }
        return $this->type;
    }
    /**
     * @return array
     */
    public function getCoordinates()
    {
        if (is_null($this->coordinates)) {
            $value = $this->raw(GeoJson::FIELD_COORDINATES);
            $this->coordinates = $value;
        }
        return $this->coordinates;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type)
    {
        $this->type = (string)$type;

        return $this;
    }
    /**
     * @param $coordinates
     * @return $this
     */
    public function setCoordinates($coordinates)
    {
        $this->coordinates = $coordinates;

        return $this;
    }

}
