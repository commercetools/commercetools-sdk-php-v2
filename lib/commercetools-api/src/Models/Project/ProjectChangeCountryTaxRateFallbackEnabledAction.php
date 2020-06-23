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
     * <p>default value is <code>false</code></p>
     *
     * @return null|bool
     */
    public function getCountryTaxRateFallbackEnabled();

    public function setCountryTaxRateFallbackEnabled(?bool $countryTaxRateFallbackEnabled): void;
}
