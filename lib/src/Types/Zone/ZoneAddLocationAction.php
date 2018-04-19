<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

interface ZoneAddLocationAction extends ZoneUpdateAction
{
    const FIELD_LOCATION = 'location';

    /**
     * @return Location
     */
    public function getLocation();

    /**
     * @param Location $location
     * @return $this
     */
    public function setLocation(Location $location);

}
