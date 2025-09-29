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
    public const FIELD_SKIP_CONFIGURATION_INPUT_DRAFT = 'skipConfigurationInputDraft';
    public const FIELD_UPDATED_EXPIRES_AT = 'updatedExpiresAt';

    /**
     * <p>Configuration for skipping future orders of the <a href="ctp:api:type:RecurringOrder">Recurring Order</a>.</p>
     *

     * @return null|SkipConfigurationDraft
     */
    public function getSkipConfigurationInputDraft();

    /**
     * <p>Date and time (UTC) the Recurring Order will expire and stop generating new orders.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getUpdatedExpiresAt();

    /**
     * @param ?SkipConfigurationDraft $skipConfigurationInputDraft
     */
    public function setSkipConfigurationInputDraft(?SkipConfigurationDraft $skipConfigurationInputDraft): void;

    /**
     * @param ?DateTimeImmutable $updatedExpiresAt
     */
    public function setUpdatedExpiresAt(?DateTimeImmutable $updatedExpiresAt): void;
}
