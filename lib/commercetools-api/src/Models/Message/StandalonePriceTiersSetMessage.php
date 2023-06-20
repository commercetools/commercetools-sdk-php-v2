<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\PriceTierCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StandalonePriceTiersSetMessage extends Message
{
    public const FIELD_TIERS = 'tiers';
    public const FIELD_PREVIOUS_TIERS = 'previousTiers';

    /**
     * <p>The updated content of the field <code>tiers</code> of the affected <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>.</p>
     *

     * @return null|PriceTierCollection
     */
    public function getTiers();

    /**
     * <p>The previous content of the field <code>tiers</code> of the affected <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>.</p>
     *

     * @return null|PriceTierCollection
     */
    public function getPreviousTiers();

    /**
     * @param ?PriceTierCollection $tiers
     */
    public function setTiers(?PriceTierCollection $tiers): void;

    /**
     * @param ?PriceTierCollection $previousTiers
     */
    public function setPreviousTiers(?PriceTierCollection $previousTiers): void;
}
