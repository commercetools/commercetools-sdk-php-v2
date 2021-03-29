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
     * @var ?int
     */
    protected $deleteDaysAfterLastModification;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?bool $countryTaxRateFallbackEnabled = null,
        ?int $deleteDaysAfterLastModification = null
    ) {
        $this->countryTaxRateFallbackEnabled = $countryTaxRateFallbackEnabled;
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
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
     * <p>The default value for the deleteDaysAfterLastModification parameter of the CartDraft. Initially set to 90 for projects created after December 2019.</p>
     *
     * @return null|int
     */
    public function getDeleteDaysAfterLastModification()
    {
        if (is_null($this->deleteDaysAfterLastModification)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION);
            if (is_null($data)) {
                return null;
            }
            $this->deleteDaysAfterLastModification = (int) $data;
        }

        return $this->deleteDaysAfterLastModification;
    }


    /**
     * @param ?bool $countryTaxRateFallbackEnabled
     */
    public function setCountryTaxRateFallbackEnabled(?bool $countryTaxRateFallbackEnabled): void
    {
        $this->countryTaxRateFallbackEnabled = $countryTaxRateFallbackEnabled;
    }

    /**
     * @param ?int $deleteDaysAfterLastModification
     */
    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void
    {
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
    }
}
