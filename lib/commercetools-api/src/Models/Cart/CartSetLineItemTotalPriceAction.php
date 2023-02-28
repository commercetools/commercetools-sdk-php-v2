<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartSetLineItemTotalPriceAction extends CartUpdateAction
{
    public const FIELD_LINE_ITEM_ID = 'lineItemId';
    public const FIELD_EXTERNAL_TOTAL_PRICE = 'externalTotalPrice';

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:LineItem">LineItem</a> to update.</p>
     *

     * @return null|string
     */
    public function getLineItemId();

    /**
     * <p>Value to set.
     * If <code>externalTotalPrice</code> is not given and the <code>priceMode</code> is <code>ExternalTotal</code>, the external price is unset and the <code>priceMode</code> is set to <code>Platform</code>.</p>
     *

     * @return null|ExternalLineItemTotalPrice
     */
    public function getExternalTotalPrice();

    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void;

    /**
     * @param ?ExternalLineItemTotalPrice $externalTotalPrice
     */
    public function setExternalTotalPrice(?ExternalLineItemTotalPrice $externalTotalPrice): void;
}
