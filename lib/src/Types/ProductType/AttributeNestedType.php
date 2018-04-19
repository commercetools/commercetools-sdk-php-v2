<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

interface AttributeNestedType extends AttributeType
{
    const FIELD_TYPE_REFERENCE = 'typeReference';

    /**
     * @return ProductTypeReference
     */
    public function getTypeReference();

    /**
     * @param ProductTypeReference $typeReference
     * @return $this
     */
    public function setTypeReference(ProductTypeReference $typeReference);

}
