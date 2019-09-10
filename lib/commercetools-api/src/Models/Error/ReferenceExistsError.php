<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Error;

use Commercetools\Base\JsonObject;

interface ReferenceExistsError extends ErrorObject
{
    
    const FIELD_REFERENCED_BY = 'referencedBy';

    /**
     *
     * @return string|null
     */
    public function getReferencedBy();
    public function setReferencedBy(?string $referencedBy): void;
}