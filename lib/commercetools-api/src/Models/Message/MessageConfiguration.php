<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;

interface MessageConfiguration extends JsonObject
{
    
    const FIELD_ENABLED = 'enabled';
    const FIELD_DELETE_DAYS_AFTER_CREATION = 'deleteDaysAfterCreation';

    /**
     *
     * @return bool|null
     */
    public function getEnabled();
    
    /**
     *
     * @return int|null
     */
    public function getDeleteDaysAfterCreation();
    public function setEnabled(?bool $enabled): void;
    
    public function setDeleteDaysAfterCreation(?int $deleteDaysAfterCreation): void;
}