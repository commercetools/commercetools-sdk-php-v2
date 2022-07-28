<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductRemovePriceAction extends ProductUpdateAction
{
    public const FIELD_PRICE_ID = 'priceId';
    public const FIELD_STAGED = 'staged';

    /**
     * <p>The <code>id</code> of the EmbeddedPrice to remove.</p>
     *

     * @return null|string
     */
    public function getPriceId();

    /**
     * <p>If <code>true</code>, only the staged EmbeddedPrice is removed. If <code>false</code>, both the current and staged EmbeddedPrice are removed.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?string $priceId
     */
    public function setPriceId(?string $priceId): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
