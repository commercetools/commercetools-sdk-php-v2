<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\JsonObject;

interface ZoneAddLocationAction extends ZoneUpdateAction
{
    
    const FIELD_LOCATION = 'location';

    /**
     *
     * @return Location|null
     */
    public function getLocation();
    public function setLocation(?Location $location): void;
}