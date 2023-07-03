<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\StandalonePrice\StagedStandalonePrice;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StandalonePriceStagedChangesAppliedMessagePayload extends MessagePayload
{
    public const FIELD_STAGED_CHANGES = 'stagedChanges';

    /**
     * <p>Applied changes of the <a href="/../api/projects/standalone-prices">StandalonePrice</a> after the <a href="ctp:api:type:StandalonePriceApplyStagedChangesAction">Apply Staged Changes</a> update action.</p>
     *

     * @return null|StagedStandalonePrice
     */
    public function getStagedChanges();

    /**
     * @param ?StagedStandalonePrice $stagedChanges
     */
    public function setStagedChanges(?StagedStandalonePrice $stagedChanges): void;
}
