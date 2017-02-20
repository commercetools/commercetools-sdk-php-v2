<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ZoneReference extends Reference {
    protected $obj;
    const DISCRIMINATOR_VALUE = 'zone';

    /**
     * @return Zone
     */
    public function getObj(): Zone
    {
        if (is_null($this->obj)) {
            $value = $this->raw('obj');
            if (!is_null($value)) {
                $this->obj = Mapper::map($value, Zone::class);
            } else {
                return Mapper::map([], Zone::class);
            }
        }
        return $this->obj;
    }
                
}
