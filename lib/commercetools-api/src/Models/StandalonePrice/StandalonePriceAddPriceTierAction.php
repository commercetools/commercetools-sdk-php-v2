<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Api\Models\Common\PriceTierDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StandalonePriceAddPriceTierAction extends StandalonePriceUpdateAction
{
    public const FIELD_TIER = 'tier';

    /**
     * <p>The <a href="ctp:api:type:PriceTier">PriceTier</a> to be added to the <code>tiers</code> field of the <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>.
     * The action returns an <a href="ctp:api:type:InvalidFieldError">InvalidField</a> error in the following cases:</p>
     * <ul>
     * <li>Trying to add a PriceTier with <code>minimumQuantity</code> &lt; <code>2</code>.</li>
     * <li>Trying to add a PriceTier with <code>minimumQuantity</code> that already exists for the StandalonePrice.</li>
     * </ul>
     *

     * @return null|PriceTierDraft
     */
    public function getTier();

    /**
     * @param ?PriceTierDraft $tier
     */
    public function setTier(?PriceTierDraft $tier): void;
}
