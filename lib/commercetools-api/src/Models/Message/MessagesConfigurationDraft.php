<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MessagesConfigurationDraft extends JsonObject
{
    public const FIELD_ENABLED = 'enabled';
    public const FIELD_DELETE_DAYS_AFTER_CREATION = 'deleteDaysAfterCreation';

    /**
     * <p>Setting to <code>true</code> activates the <a href="/../api/projects/messages">Messages Query</a> feature.</p>
     *

     * @return null|bool
     */
    public function getEnabled();

    /**
     * <p>Specifies the number of days each Message should be available via the <a href="/../api/projects/messages">Messages Query</a> API. For Messages older than the specified period, it is not guaranteed that they are still accessible via the API.</p>
     *

     * @return null|int
     */
    public function getDeleteDaysAfterCreation();

    /**
     * @param ?bool $enabled
     */
    public function setEnabled(?bool $enabled): void;

    /**
     * @param ?int $deleteDaysAfterCreation
     */
    public function setDeleteDaysAfterCreation(?int $deleteDaysAfterCreation): void;
}
