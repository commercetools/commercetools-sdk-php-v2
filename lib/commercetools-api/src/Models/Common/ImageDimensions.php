<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Common;

use Commercetools\Base\JsonObject;

interface ImageDimensions extends JsonObject
{
    
    const FIELD_W = 'w';
    const FIELD_H = 'h';

    /**
     *
     * @return int|null
     */
    public function getW();
    
    /**
     *
     * @return int|null
     */
    public function getH();
    public function setW(?int $w): void;
    
    public function setH(?int $h): void;
}