<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\ProductType\AttributeTypeModel;

class AttributeReferenceTypeModel extends AttributeTypeModel implements AttributeReferenceType
{
    const DISCRIMINATOR_VALUE = 'reference';

    /**
     * @var string
     */
    protected $referenceTypeId;

    /**
     * @return string
     */
    public function getReferenceTypeId()
    {
        if (is_null($this->referenceTypeId)) {
            $value = $this->raw(AttributeReferenceType::FIELD_REFERENCE_TYPE_ID);
            $value = (string)$value;
            $this->referenceTypeId = $value;
        }
        return $this->referenceTypeId;
    }

    /**
     * @param string $referenceTypeId
     * @return $this
     */
    public function setReferenceTypeId(string $referenceTypeId)
    {
        $this->referenceTypeId = (string)$referenceTypeId;

        return $this;
    }

}
