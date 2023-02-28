<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartSetDeleteDaysAfterLastModificationAction extends CartUpdateAction
{
    public const FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION = 'deleteDaysAfterLastModification';

    /**
     * <p>Value to set.
     * If not provided, the default value for this field configured in <a href="ctp:api:type:CartsConfiguration">Project settings</a> is assigned.</p>
     *

     * @return null|int
     */
    public function getDeleteDaysAfterLastModification();

    /**
     * @param ?int $deleteDaysAfterLastModification
     */
    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void;
}
