<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSetPriceKeyAction extends ProductUpdateAction
{
    public const FIELD_PRICE_ID = 'priceId';
    public const FIELD_STAGED = 'staged';
    public const FIELD_KEY = 'key';

    /**
     * <p>The <code>id</code> of the <a href="ctp:api:type:Price">Price</a> to set the key.</p>
     *

     * @return null|string
     */
    public function getPriceId();

    /**
     * <p>If <code>true</code>, only the staged <a href="ctp:api:type:Price">Embedded Price</a> is updated. If <code>false</code>, both the current and staged Embedded Price are updated.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * @param ?string $priceId
     */
    public function setPriceId(?string $priceId): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;
}
