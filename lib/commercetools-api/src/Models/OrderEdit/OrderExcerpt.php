<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Cart\TaxedPrice;
use Commercetools\Api\Models\Common\TypedMoney;

interface OrderExcerpt extends JsonObject
{

    public const FIELD_TOTAL_PRICE = 'totalPrice';
    public const FIELD_TAXED_PRICE = 'taxedPrice';
    public const FIELD_VERSION = 'version';

    /**
     * @return null|TypedMoney
     */
    public function getTotalPrice();

    /**
     * @return null|TaxedPrice
     */
    public function getTaxedPrice();

    /**
     * @return null|int
     */
    public function getVersion();

    public function setTotalPrice(?TypedMoney $totalPrice): void;

    public function setTaxedPrice(?TaxedPrice $taxedPrice): void;

    public function setVersion(?int $version): void;
}
