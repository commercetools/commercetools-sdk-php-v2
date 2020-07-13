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
 * @implements Builder<ProjectChangeCountryTaxRateFallbackEnabledAction>
 */
final class ProjectChangeCountryTaxRateFallbackEnabledActionBuilder implements Builder
{
    /**
     * @var ?bool
     */
    private $countryTaxRateFallbackEnabled;

    /**
     * <p>default value is <code>false</code></p>
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


    public function build(): ProjectChangeCountryTaxRateFallbackEnabledAction
    {
        return new ProjectChangeCountryTaxRateFallbackEnabledActionModel(
            $this->countryTaxRateFallbackEnabled
        );
    }

    public static function of(): ProjectChangeCountryTaxRateFallbackEnabledActionBuilder
    {
        return new self();
    }
}
