<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Error;

use Commercetools\Base\JsonObject;

interface ConcurrentModificationError extends ErrorObject
{
    
    const FIELD_CURRENT_VERSION = 'currentVersion';

    /**
     *
     * @return int|null
     */
    public function getCurrentVersion();
    public function setCurrentVersion(?int $currentVersion): void;
}