<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

interface AttributeReferenceType extends AttributeType
{
    const FIELD_REFERENCE_TYPE_ID = 'referenceTypeId';

    /**
     * @return string
     */
    public function getReferenceTypeId();

    /**
     * @param string $referenceTypeId
     * @return $this
     */
    public function setReferenceTypeId(string $referenceTypeId);

}
