<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartsConfiguration extends JsonObject
{
    public const FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION = 'deleteDaysAfterLastModification';
    public const FIELD_COUNTRY_TAX_RATE_FALLBACK_ENABLED = 'countryTaxRateFallbackEnabled';
    public const FIELD_PRICE_ROUNDING_MODE = 'priceRoundingMode';
    public const FIELD_TAX_ROUNDING_MODE = 'taxRoundingMode';

    /**
     * <p>Default value for the <code>deleteDaysAfterLastModification</code> parameter of the <a href="ctp:api:type:CartDraft">CartDraft</a> and <a href="ctp:api:type:MyCartDraft">MyCartDraft</a>.</p>
     * <ul>
     * <li>If a <a href="ctp:api:type:ChangeSubscription">ChangeSubscription</a> for Carts exists, a <a href="ctp:api:type:ResourceDeletedDeliveryPayload">ResourceDeletedDeliveryPayload</a> is sent upon deletion of a Cart.</li>
     * <li>Carts with <a href="ctp:api:type:CartOrigin">CartOrigin</a> <code>Quote</code> or <code>RecurringOrder</code> are not affected by this configuration value.</li>
     * <li>Changing this value doesn't affect the retention of existing Carts. To update an existing Cart's retention use <a href="/projects/carts#set-deletedaysafterlastmodification"><code>setDeleteDaysAfterLastModification</code></a> on the Carts API.</li>
     * <li>This field may not be present on Projects created before January 2020.</li>
     * </ul>
     *

     * @return null|int
     */
    public function getDeleteDaysAfterLastModification();

    /**
     * <p>Indicates if country <em>- no state</em> Tax Rate fallback should be used when a shipping address state is not explicitly covered in the rates lists of all Tax Categories of a Cart Line Items. This field may not be present on Projects created before June 2020.</p>
     *

     * @return null|bool
     */
    public function getCountryTaxRateFallbackEnabled();

    /**
     * <p>Default value for the <code>priceRoundingMode</code> parameter of the <a href="ctp:api:type:CartDraft">CartDraft</a>.
     * Indicates how the total prices on <a href="ctp:api:type:LineItem">LineItems</a> and <a href="ctp:api:type:CustomLineItem">CustomLineItems</a> are rounded when calculated.</p>
     *

     * @return null|string
     */
    public function getPriceRoundingMode();

    /**
     * <p>Default value for the <code>taxRoundingMode</code> parameter of the <a href="ctp:api:type:CartDraft">CartDraft</a>.
     * Indicates how monetary values are rounded when calculating taxes for <code>taxedPrice</code>.</p>
     *

     * @return null|string
     */
    public function getTaxRoundingMode();

    /**
     * @param ?int $deleteDaysAfterLastModification
     */
    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void;

    /**
     * @param ?bool $countryTaxRateFallbackEnabled
     */
    public function setCountryTaxRateFallbackEnabled(?bool $countryTaxRateFallbackEnabled): void;

    /**
     * @param ?string $priceRoundingMode
     */
    public function setPriceRoundingMode(?string $priceRoundingMode): void;

    /**
     * @param ?string $taxRoundingMode
     */
    public function setTaxRoundingMode(?string $taxRoundingMode): void;
}
