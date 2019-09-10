<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

interface MissingTaxRateForCountryError extends ErrorObject
{
    const FIELD_TAX_CATEGORY_ID = 'taxCategoryId';
    const FIELD_COUNTRY = 'country';
    const FIELD_STATE = 'state';

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

    public function setTaxCategoryId(?string $taxCategoryId): void;

    public function setCountry(?string $country): void;

    public function setState(?string $state): void;
}
