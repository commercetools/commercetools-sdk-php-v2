<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ZoneRemoveLocationAction extends ZoneUpdateAction {
    protected $location;
    const DISCRIMINATOR_VALUE = 'removeLocation';

    /**
     * @return Location
     */
    public function getLocation(): Location
    {
        if (is_null($this->location)) {
            $value = $this->raw('location');
            if (!is_null($value)) {
                $this->location = Mapper::map($value, Location::class);
            } else {
                return Mapper::map([], Location::class);
            }
        }
        return $this->location;
    }
                
}
