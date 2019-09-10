<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Error;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Reference;

interface DuplicateFieldWithConflictingResourceError extends ErrorObject
{
    
    const FIELD_FIELD = 'field';
    const FIELD_DUPLICATE_VALUE = 'duplicateValue';
    const FIELD_CONFLICTING_RESOURCE = 'conflictingResource';

    /**
     *
     * @return string|null
     */
    public function getField();
    
    /**
     *
     * @return JsonObject|null
     */
    public function getDuplicateValue();
    
    /**
     *
     * @return Reference|null
     */
    public function getConflictingResource();
    public function setField(?string $field): void;
    
    public function setDuplicateValue(?JsonObject $duplicateValue): void;
    
    public function setConflictingResource(?Reference $conflictingResource): void;
}