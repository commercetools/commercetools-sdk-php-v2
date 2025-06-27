<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProjectChangePriceRoundingModeAction extends ProjectUpdateAction
{
    public const FIELD_PRICE_ROUNDING_MODE = 'priceRoundingMode';

    /**
     * <p>Project-level default rounding mode for calculating the total prices on <a href="ctp:api:type:LineItem">LineItems</a> and <a href="ctp:api:type:CustomLineItem">CustomLineItems</a>. See <a href="ctp:api:type:CartsConfiguration">CartsConfiguration</a>.</p>
     *

     * @return null|string
     */
    public function getPriceRoundingMode();

    /**
     * @param ?string $priceRoundingMode
     */
    public function setPriceRoundingMode(?string $priceRoundingMode): void;
}
