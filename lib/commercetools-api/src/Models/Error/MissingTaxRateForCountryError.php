<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MissingTaxRateForCountryError extends ErrorObject
{
    public const FIELD_TAX_CATEGORY_ID = 'taxCategoryId';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_STATE = 'state';

    /**

     * @return null|string
     */
    public function getTaxCategoryId();

    /**

     * @return null|string
     */
    public function getCountry();

    /**

     * @return null|string
     */
    public function getState();

    /**
     * @param ?string $taxCategoryId
     */
    public function setTaxCategoryId(?string $taxCategoryId): void;

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void;

    /**
     * @param ?string $state
     */
    public function setState(?string $state): void;
}
