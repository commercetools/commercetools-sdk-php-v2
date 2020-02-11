<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\Money;

interface CartSetLineItemPriceAction extends CartUpdateAction
{

    public const FIELD_LINE_ITEM_ID = 'lineItemId';
    public const FIELD_EXTERNAL_PRICE = 'externalPrice';

    /**
     * @return null|string
     */
    public function getLineItemId();

    /**
     * @return null|Money
     */
    public function getExternalPrice();

    public function setLineItemId(?string $lineItemId): void;

    public function setExternalPrice(?Money $externalPrice): void;
}
