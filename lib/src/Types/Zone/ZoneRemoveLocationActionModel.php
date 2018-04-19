<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Zone\ZoneUpdateActionModel;

class ZoneRemoveLocationActionModel extends ZoneUpdateActionModel implements ZoneRemoveLocationAction
{
    const DISCRIMINATOR_VALUE = 'removeLocation';

    /**
     * @var Location
     */
    protected $location;

    /**
     * @return Location
     */
    public function getLocation()
    {
        if (is_null($this->location)) {
            $value = $this->raw(ZoneRemoveLocationAction::FIELD_LOCATION);
            if (is_null($value)) {
                return $this->mapData(Location::class, null);
            }
            $value = $this->mapData(Location::class, $value);

            $this->location = $value;
        }
        return $this->location;
    }

    /**
     * @param Location $location
     * @return $this
     */
    public function setLocation(Location $location)
    {
        $this->location = $location;

        return $this;
    }

}
