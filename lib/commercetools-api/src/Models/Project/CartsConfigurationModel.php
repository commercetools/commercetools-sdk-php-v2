<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CartsConfigurationModel extends JsonObjectModel implements CartsConfiguration
{
    /**
     * @var ?bool
     */
    protected $countryTaxRateFallbackEnabled;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?bool $countryTaxRateFallbackEnabled = null
    ) {
        $this->countryTaxRateFallbackEnabled = $countryTaxRateFallbackEnabled;
    }

    /**
     * <p>if country - no state tax rate fallback should be used when a shipping address state is not explicitly covered in the rates lists of all tax categories of a cart line items. Default value 'false'</p>
     *
     * @return null|bool
     */
    public function getCountryTaxRateFallbackEnabled()
    {
        if (is_null($this->countryTaxRateFallbackEnabled)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_COUNTRY_TAX_RATE_FALLBACK_ENABLED);
            if (is_null($data)) {
                return null;
            }
            $this->countryTaxRateFallbackEnabled = (bool) $data;
        }

        return $this->countryTaxRateFallbackEnabled;
    }


    /**
     * @param ?bool $countryTaxRateFallbackEnabled
     */
    public function setCountryTaxRateFallbackEnabled(?bool $countryTaxRateFallbackEnabled): void
    {
        $this->countryTaxRateFallbackEnabled = $countryTaxRateFallbackEnabled;
    }
}
