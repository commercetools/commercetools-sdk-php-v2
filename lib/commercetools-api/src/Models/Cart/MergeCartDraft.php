<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MergeCartDraft extends JsonObject
{
    public const FIELD_ANONYMOUS_CART = 'anonymousCart';
    public const FIELD_MERGE_MODE = 'mergeMode';
    public const FIELD_UPDATE_PRODUCT_DATA = 'updateProductData';
    public const FIELD_ANONYMOUS_ID = 'anonymousId';

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to the anonymous <a href="ctp:api:type:Cart">Cart</a> to be merged. Required if <code>anonymousId</code> is not provided.</p>
     *

     * @return null|CartResourceIdentifier
     */
    public function getAnonymousCart();

    /**
     * <p>Determines how to merge the anonymous Cart with the existing Customer Cart.</p>
     *

     * @return null|string
     */
    public function getMergeMode();

    /**
     * <ul>
     * <li>If <code>true</code>, the <a href="ctp:api:type:LineItem">LineItem</a> Product data (<code>name</code>, <code>variant</code>, and <code>productType</code>) of the returned Cart will be updated.</li>
     * <li>If <code>false</code>, only the prices, discounts, and tax rates will be updated.</li>
     * </ul>
     *

     * @return null|bool
     */
    public function getUpdateProductData();

    /**
     * <p>Assigns the Customer to the <a href="ctp:api:type:Cart">Carts</a> that have the same <code>anonymousId</code>. Required if <code>anonymousCart</code> is not provided.
     * If both <code>anonymousCart</code> and <code>anonymousId</code> are provided, this value must match the <code>anonymousId</code> of the anonymous <a href="ctp:api:type:Cart">Cart</a> otherwise, an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error is returned.</p>
     *

     * @return null|string
     */
    public function getAnonymousId();

    /**
     * @param ?CartResourceIdentifier $anonymousCart
     */
    public function setAnonymousCart(?CartResourceIdentifier $anonymousCart): void;

    /**
     * @param ?string $mergeMode
     */
    public function setMergeMode(?string $mergeMode): void;

    /**
     * @param ?bool $updateProductData
     */
    public function setUpdateProductData(?bool $updateProductData): void;

    /**
     * @param ?string $anonymousId
     */
    public function setAnonymousId(?string $anonymousId): void;
}
