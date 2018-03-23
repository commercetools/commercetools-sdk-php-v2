<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Common\ReferenceModel;

use Commercetools\Types\Common\Reference;

class TypeReferenceModel extends ReferenceModel implements TypeReference {
    const DISCRIMINATOR_VALUE = 'type';

    /**
     * @var Type
     */
    protected $obj;

    /**
     * @return Type
     */
    public function getObj()
    {
        if (is_null($this->obj)) {
            $value = $this->raw(TypeReference::FIELD_OBJ);
            if (is_null($value)) {
                return $this->mapData(Type::class, null);
            }
            $value = $this->mapData(Type::class, $value);

            $this->obj = $value;
        }
        return $this->obj;
    }

    /**
     * @param Type $obj
     * @return $this
     */
    public function setObj(Type $obj)
    {
        $this->obj = $obj;

        return $this;
    }

}
