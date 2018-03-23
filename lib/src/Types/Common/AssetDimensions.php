<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonObject;

interface AssetDimensions extends JsonObject {
    const FIELD_W = 'w';
    const FIELD_H = 'h';

    /**
     * @return int
     */
    public function getW();

    /**
     * @return int
     */
    public function getH();

    /**
     * @param int $w
     * @return $this
     */
    public function setW(int $w);

    /**
     * @param int $h
     * @return $this
     */
    public function setH(int $h);

}
