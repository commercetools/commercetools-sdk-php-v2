<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProjectChangeCountryTaxRateFallbackEnabledAction extends ProjectUpdateAction
{
    public const FIELD_COUNTRY_TAX_RATE_FALLBACK_ENABLED = 'countryTaxRateFallbackEnabled';

    /**
     * <p>When <code>true</code>, country <em>- no state</em> Tax Rate is used as fallback. See <a href="ctp:api:type:CartsConfiguration">CartsConfiguration</a>.</p>
     *

     * @return null|bool
     */
    public function getCountryTaxRateFallbackEnabled();

    /**
     * @param ?bool $countryTaxRateFallbackEnabled
     */
    public function setCountryTaxRateFallbackEnabled(?bool $countryTaxRateFallbackEnabled): void;
}
