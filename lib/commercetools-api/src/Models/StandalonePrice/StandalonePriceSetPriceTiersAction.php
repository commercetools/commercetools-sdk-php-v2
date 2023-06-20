<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Api\Models\Common\PriceTierDraftCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StandalonePriceSetPriceTiersAction extends StandalonePriceUpdateAction
{
    public const FIELD_TIERS = 'tiers';

    /**
     * <p>Value to set. If empty, any existing value will be removed.
     * The <code>minimumQuantity</code> of the PriceTiers must be unique and greater than <code>1</code>, otherwise an <a href="ctp:api:type:InvalidFieldError">InvalidField</a> error is returned.</p>
     *

     * @return null|PriceTierDraftCollection
     */
    public function getTiers();

    /**
     * @param ?PriceTierDraftCollection $tiers
     */
    public function setTiers(?PriceTierDraftCollection $tiers): void;
}
