<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Cart\ExternalTaxRateDraft;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedOrderSetCustomLineItemTaxRateAction extends StagedOrderUpdateAction
{
    public const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    public const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';

    /**

     * @return null|string
     */
    public function getCustomLineItemId();

    /**

     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate();

    /**
     * @param ?string $customLineItemId
     */
    public function setCustomLineItemId(?string $customLineItemId): void;

    /**
     * @param ?ExternalTaxRateDraft $externalTaxRate
     */
    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void;
}
