<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;

interface CartSetDeleteDaysAfterLastModificationAction extends CartUpdateAction
{
    
    const FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION = 'deleteDaysAfterLastModification';

    /**
     *
     * @return int|null
     */
    public function getDeleteDaysAfterLastModification();
    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void;
}