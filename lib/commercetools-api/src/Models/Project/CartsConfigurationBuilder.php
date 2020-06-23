<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartsConfiguration>
 */
final class CartsConfigurationBuilder implements Builder
{
    /**
     * @var ?bool
     */
    private $countryTaxRateFallbackEnabled;

    /**
     * <p>if country - no state tax rate fallback should be used when a shipping address state is not explicitly covered in the rates lists of all tax categories of a cart line items. Default value 'false'</p>
     *
     * @return null|bool
     */
    public function getCountryTaxRateFallbackEnabled()
    {
        return $this->countryTaxRateFallbackEnabled;
    }

    /**
     * @return $this
     */
    public function withCountryTaxRateFallbackEnabled(?bool $countryTaxRateFallbackEnabled)
    {
        $this->countryTaxRateFallbackEnabled = $countryTaxRateFallbackEnabled;

        return $this;
    }


    public function build(): CartsConfiguration
    {
        return new CartsConfigurationModel(
            $this->countryTaxRateFallbackEnabled
        );
    }

    public static function of(): CartsConfigurationBuilder
    {
        return new self();
    }
}
