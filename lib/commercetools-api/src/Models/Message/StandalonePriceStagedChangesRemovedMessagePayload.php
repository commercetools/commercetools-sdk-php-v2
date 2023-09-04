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

interface StandalonePriceStagedChangesRemovedMessagePayload extends MessagePayload
{
    public const FIELD_STAGED_CHANGES = 'stagedChanges';

    /**
     * <p>Removed changes of the <a href="ctp:api:type:StandalonePrice">StandalonePrice</a> after the <a href="ctp:api:type:StandalonePriceRemoveStagedChangesAction">Remove Staged Changes</a> update action.</p>
     *

     * @return null|StagedStandalonePrice
     */
    public function getStagedChanges();

    /**
     * @param ?StagedStandalonePrice $stagedChanges
     */
    public function setStagedChanges(?StagedStandalonePrice $stagedChanges): void;
}
