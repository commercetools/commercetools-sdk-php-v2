<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObject;

interface CustomFieldReferenceType extends FieldType
{
    
    const FIELD_REFERENCE_TYPE_ID = 'referenceTypeId';

    /**
     *
     * @return string|null
     */
    public function getReferenceTypeId();
    public function setReferenceTypeId(?string $referenceTypeId): void;
}