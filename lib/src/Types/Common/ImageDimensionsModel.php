<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonObjectModel;

class ImageDimensionsModel extends JsonObjectModel implements ImageDimensions {
    /**
     * @var int
     */
    protected $w;
    /**
     * @var int
     */
    protected $h;

    /**
     * @return int
     */
    public function getW()
    {
        if (is_null($this->w)) {
            $value = $this->raw(ImageDimensions::FIELD_W);
            $value = (int)$value;
            $this->w = $value;
        }
        return $this->w;
    }
    /**
     * @return int
     */
    public function getH()
    {
        if (is_null($this->h)) {
            $value = $this->raw(ImageDimensions::FIELD_H);
            $value = (int)$value;
            $this->h = $value;
        }
        return $this->h;
    }

    /**
     * @param int $w
     * @return $this
     */
    public function setW(int $w)
    {
        $this->w = (int)$w;

        return $this;
    }
    /**
     * @param int $h
     * @return $this
     */
    public function setH(int $h)
    {
        $this->h = (int)$h;

        return $this;
    }

}
