<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartsConfiguration extends JsonObject
{
    public const FIELD_COUNTRY_TAX_RATE_FALLBACK_ENABLED = 'countryTaxRateFallbackEnabled';
    public const FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION = 'deleteDaysAfterLastModification';

    /**
     * <p>if country - no state tax rate fallback should be used when a shipping address state is not explicitly covered in the rates lists of all tax categories of a cart line items. Default value 'false'</p>
     *
     * @return null|bool
     */
    public function getCountryTaxRateFallbackEnabled();

    /**
     * <p>The default value for the deleteDaysAfterLastModification parameter of the CartDraft. Initially set to 90 for projects created after December 2019.</p>
     *
     * @return null|int
     */
    public function getDeleteDaysAfterLastModification();

    /**
     * @param ?bool $countryTaxRateFallbackEnabled
     */
    public function setCountryTaxRateFallbackEnabled(?bool $countryTaxRateFallbackEnabled): void;

    /**
     * @param ?int $deleteDaysAfterLastModification
     */
    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void;
}
