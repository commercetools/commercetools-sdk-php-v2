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
final class ProjectChangeCountryTaxRateFallbackEnabledActionModel extends JsonObjectModel implements ProjectChangeCountryTaxRateFallbackEnabledAction
{
    public const DISCRIMINATOR_VALUE = 'changeCountryTaxRateFallbackEnabled';
    /**
     * @var ?string
     */
    protected $action;

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
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>When <code>true</code>, country <em>- no state</em> Tax Rate is used as fallback. See <a href="ctp:api:type:CartsConfiguration">CartsConfiguration</a>.</p>
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
