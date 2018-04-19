<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomObject;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Common\ReferenceModel;

use Commercetools\Types\Common\Reference;

class CustomObjectReferenceModel extends ReferenceModel implements CustomObjectReference
{
    const DISCRIMINATOR_VALUE = 'key-value-document';

    /**
     * @var CustomObject
     */
    protected $obj;

    /**
     * @return CustomObject
     */
    public function getObj()
    {
        if (is_null($this->obj)) {
            $value = $this->raw(CustomObjectReference::FIELD_OBJ);
            if (is_null($value)) {
                return $this->mapData(CustomObject::class, null);
            }
            $value = $this->mapData(CustomObject::class, $value);

            $this->obj = $value;
        }
        return $this->obj;
    }

    /**
     * @param CustomObject $obj
     * @return $this
     */
    public function setObj(CustomObject $obj)
    {
        $this->obj = $obj;

        return $this;
    }

}
