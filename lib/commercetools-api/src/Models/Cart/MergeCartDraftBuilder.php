<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MergeCartDraft>
 */
final class MergeCartDraftBuilder implements Builder
{
    /**

     * @var null|CartResourceIdentifier|CartResourceIdentifierBuilder
     */
    private $anonymousCart;

    /**

     * @var ?string
     */
    private $mergeMode;

    /**

     * @var ?bool
     */
    private $updateProductData;

    /**

     * @var ?string
     */
    private $anonymousId;

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to the anonymous <a href="ctp:api:type:Cart">Cart</a> to be merged. Required if <code>anonymousId</code> is not provided.</p>
     *

     * @return null|CartResourceIdentifier
     */
    public function getAnonymousCart()
    {
        return $this->anonymousCart instanceof CartResourceIdentifierBuilder ? $this->anonymousCart->build() : $this->anonymousCart;
    }

    /**
     * <p>Determines how to merge the anonymous Cart with the existing Customer Cart.</p>
     *

     * @return null|string
     */
    public function getMergeMode()
    {
        return $this->mergeMode;
    }

    /**
     * <ul>
     * <li>If <code>true</code>, the <a href="ctp:api:type:LineItem">LineItem</a> Product data (<code>name</code>, <code>variant</code>, and <code>productType</code>) of the returned Cart will be updated.</li>
     * <li>If <code>false</code>, only the prices, discounts, and tax rates will be updated.</li>
     * </ul>
     *

     * @return null|bool
     */
    public function getUpdateProductData()
    {
        return $this->updateProductData;
    }

    /**
     * <p>Assigns the Customer to the <a href="ctp:api:type:Cart">Carts</a> that have the same <code>anonymousId</code>. Required if <code>anonymousCart</code> is not provided.
     * If both <code>anonymousCart</code> and <code>anonymousId</code> are provided, this value must match the <code>anonymousId</code> of the anonymous <a href="ctp:api:type:Cart">Cart</a> otherwise, an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error is returned.</p>
     *

     * @return null|string
     */
    public function getAnonymousId()
    {
        return $this->anonymousId;
    }

    /**
     * @param ?CartResourceIdentifier $anonymousCart
     * @return $this
     */
    public function withAnonymousCart(?CartResourceIdentifier $anonymousCart)
    {
        $this->anonymousCart = $anonymousCart;

        return $this;
    }

    /**
     * @param ?string $mergeMode
     * @return $this
     */
    public function withMergeMode(?string $mergeMode)
    {
        $this->mergeMode = $mergeMode;

        return $this;
    }

    /**
     * @param ?bool $updateProductData
     * @return $this
     */
    public function withUpdateProductData(?bool $updateProductData)
    {
        $this->updateProductData = $updateProductData;

        return $this;
    }

    /**
     * @param ?string $anonymousId
     * @return $this
     */
    public function withAnonymousId(?string $anonymousId)
    {
        $this->anonymousId = $anonymousId;

        return $this;
    }

    /**
     * @deprecated use withAnonymousCart() instead
     * @return $this
     */
    public function withAnonymousCartBuilder(?CartResourceIdentifierBuilder $anonymousCart)
    {
        $this->anonymousCart = $anonymousCart;

        return $this;
    }

    public function build(): MergeCartDraft
    {
        return new MergeCartDraftModel(
            $this->anonymousCart instanceof CartResourceIdentifierBuilder ? $this->anonymousCart->build() : $this->anonymousCart,
            $this->mergeMode,
            $this->updateProductData,
            $this->anonymousId
        );
    }

    public static function of(): MergeCartDraftBuilder
    {
        return new self();
    }
}
