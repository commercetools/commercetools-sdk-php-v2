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
     *
     * @var ?int
     */
    protected $deleteDaysAfterLastModification;

    /**
     *
     * @var ?bool
     */
    protected $countryTaxRateFallbackEnabled;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $deleteDaysAfterLastModification = null,
        ?bool $countryTaxRateFallbackEnabled = null
    ) {
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
        $this->countryTaxRateFallbackEnabled = $countryTaxRateFallbackEnabled;
    }

    /**
     * <p>Default value for the <code>deleteDaysAfterLastModification</code> parameter of the <a href="ctp:api:type:CartDraft">CartDraft</a> and <a href="ctp:api:type:MyCartDraft">MyCartDraft</a>.
     * If a <a href="ctp:api:type:ChangeSubscription">ChangeSubscription</a> for Carts exists, a <a href="ctp:api:type:ResourceDeletedDeliveryPayload">ResourceDeletedDeliveryPayload</a> is sent upon deletion of a Cart.</p>
     * <p>This field may not be present on Projects created before January 2020.</p>
     *
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
     * <p>Indicates if country <em>- no state</em> Tax Rate fallback should be used when a shipping address state is not explicitly covered in the rates lists of all Tax Categories of a Cart Line Items. This field may not be present on Projects created before June 2020.</p>
     *
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
     * @param ?int $deleteDaysAfterLastModification
     */
    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void
    {
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
    }

    /**
     * @param ?bool $countryTaxRateFallbackEnabled
     */
    public function setCountryTaxRateFallbackEnabled(?bool $countryTaxRateFallbackEnabled): void
    {
        $this->countryTaxRateFallbackEnabled = $countryTaxRateFallbackEnabled;
    }
}
