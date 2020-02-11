<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface MessageConfigurationDraft extends JsonObject
{

    public const FIELD_ENABLED = 'enabled';
    public const FIELD_DELETE_DAYS_AFTER_CREATION = 'deleteDaysAfterCreation';

    /**
     * @return null|bool
     */
    public function getEnabled();

    /**
     * @return null|int
     */
    public function getDeleteDaysAfterCreation();

    public function setEnabled(?bool $enabled): void;

    public function setDeleteDaysAfterCreation(?int $deleteDaysAfterCreation): void;
}
