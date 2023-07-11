<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StagedOrderSetCountryAction>
 */
final class StagedOrderSetCountryActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $country;

    /**
     * <p>Value to set.
     * If empty, any existing value is removed.</p>
     * <p>If the Cart is bound to a <code>store</code>, the provided value must be included in the <a href="ctp:api:type:Store">Store</a>'s <code>countries</code>.
     * Otherwise a <a href="ctp:api:type:CountryNotConfiguredInStoreError">CountryNotConfiguredInStore</a> error is returned.</p>
     *

     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param ?string $country
     * @return $this
     */
    public function withCountry(?string $country)
    {
        $this->country = $country;

        return $this;
    }


    public function build(): StagedOrderSetCountryAction
    {
        return new StagedOrderSetCountryActionModel(
            $this->country
        );
    }

    public static function of(): StagedOrderSetCountryActionBuilder
    {
        return new self();
    }
}
