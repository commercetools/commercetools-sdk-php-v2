<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface RecurringOrderSetOrderSkipConfigurationAction extends RecurringOrderUpdateAction
{
    public const FIELD_SKIP_CONFIGURATION = 'skipConfiguration';
    public const FIELD_UPDATED_EXPIRES_AT = 'updatedExpiresAt';

    /**
     * <p>Configuration for skipping the next orders of the <a href="ctp:api:type:RecurringOrder">Recurring Order</a>.</p>
     *

     * @return null|SkipConfigurationDraft
     */
    public function getSkipConfiguration();

    /**
     * <p>Date and time (UTC) the Recurring Order will expire and stop generating new orders.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getUpdatedExpiresAt();

    /**
     * @param ?SkipConfigurationDraft $skipConfiguration
     */
    public function setSkipConfiguration(?SkipConfigurationDraft $skipConfiguration): void;

    /**
     * @param ?DateTimeImmutable $updatedExpiresAt
     */
    public function setUpdatedExpiresAt(?DateTimeImmutable $updatedExpiresAt): void;
}
