<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Type\FieldTypeModel;

class CustomFieldReferenceTypeModel extends FieldTypeModel implements CustomFieldReferenceType
{
    const DISCRIMINATOR_VALUE = 'Reference';

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
            $value = $this->raw(CustomFieldReferenceType::FIELD_REFERENCE_TYPE_ID);
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
