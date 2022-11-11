<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\StoreCountry\StoreCountry;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreAddCountryAction extends StoreUpdateAction
{
    public const FIELD_COUNTRY = 'country';

    /**
     * <p>Value to append to <code>countries</code>.</p>
     *

     * @return null|StoreCountry
     */
    public function getCountry();

    /**
     * @param ?StoreCountry $country
     */
    public function setCountry(?StoreCountry $country): void;
}
