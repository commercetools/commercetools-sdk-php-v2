<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Common\ReferenceModel;

use Commercetools\Types\Common\Reference;

class ZoneReferenceModel extends ReferenceModel implements ZoneReference
{
    const DISCRIMINATOR_VALUE = 'zone';

    /**
     * @var Zone
     */
    protected $obj;

    /**
     * @return Zone
     */
    public function getObj()
    {
        if (is_null($this->obj)) {
            $value = $this->raw(ZoneReference::FIELD_OBJ);
            if (is_null($value)) {
                return $this->mapData(Zone::class, null);
            }
            $value = $this->mapData(Zone::class, $value);

            $this->obj = $value;
        }
        return $this->obj;
    }

    /**
     * @param Zone $obj
     * @return $this
     */
    public function setObj(Zone $obj)
    {
        $this->obj = $obj;

        return $this;
    }

}
