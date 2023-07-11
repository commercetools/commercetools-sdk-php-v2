<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedOrderSetCountryAction extends StagedOrderUpdateAction
{
    public const FIELD_COUNTRY = 'country';

    /**
     * <p>Value to set.
     * If empty, any existing value is removed.</p>
     * <p>If the Cart is bound to a <code>store</code>, the provided value must be included in the <a href="ctp:api:type:Store">Store</a>'s <code>countries</code>.
     * Otherwise a <a href="ctp:api:type:CountryNotConfiguredInStoreError">CountryNotConfiguredInStore</a> error is returned.</p>
     *

     * @return null|string
     */
    public function getCountry();

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void;
}
