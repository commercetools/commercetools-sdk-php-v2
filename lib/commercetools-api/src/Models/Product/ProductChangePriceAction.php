<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductChangePriceAction extends ProductUpdateAction
{
    public const FIELD_PRICE_ID = 'priceId';
    public const FIELD_PRICE = 'price';
    public const FIELD_STAGED = 'staged';

    /**
     * <p>The <code>id</code> of the EmbeddedPrice to update.</p>
     *

     * @return null|string
     */
    public function getPriceId();

    /**
     * <p>Value to set.</p>
     *

     * @return null|EmbeddedPriceDraft
     */
    public function getPrice();

    /**
     * <p>If <code>true</code>, only the staged EmbeddedPrice is updated. If <code>false</code>, both the current and staged EmbeddedPrice are updated.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?string $priceId
     */
    public function setPriceId(?string $priceId): void;

    /**
     * @param ?EmbeddedPriceDraft $price
     */
    public function setPrice(?EmbeddedPriceDraft $price): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
