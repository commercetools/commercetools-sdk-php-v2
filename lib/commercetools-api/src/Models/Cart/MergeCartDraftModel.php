<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class MergeCartDraftModel extends JsonObjectModel implements MergeCartDraft
{
    /**
     *
     * @var ?CartResourceIdentifier
     */
    protected $anonymousCart;

    /**
     *
     * @var ?string
     */
    protected $mergeMode;

    /**
     *
     * @var ?bool
     */
    protected $updateProductData;

    /**
     *
     * @var ?string
     */
    protected $anonymousId;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CartResourceIdentifier $anonymousCart = null,
        ?string $mergeMode = null,
        ?bool $updateProductData = null,
        ?string $anonymousId = null
    ) {
        $this->anonymousCart = $anonymousCart;
        $this->mergeMode = $mergeMode;
        $this->updateProductData = $updateProductData;
        $this->anonymousId = $anonymousId;
    }

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to the anonymous <a href="ctp:api:type:Cart">Cart</a> to be merged. Required if <code>anonymousId</code> is not provided.</p>
     *
     *
     * @return null|CartResourceIdentifier
     */
    public function getAnonymousCart()
    {
        if (is_null($this->anonymousCart)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ANONYMOUS_CART);
            if (is_null($data)) {
                return null;
            }

            $this->anonymousCart = CartResourceIdentifierModel::of($data);
        }

        return $this->anonymousCart;
    }

    /**
     * <p>Determines how to merge the anonymous Cart with the existing Customer Cart.</p>
     *
     *
     * @return null|string
     */
    public function getMergeMode()
    {
        if (is_null($this->mergeMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_MERGE_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->mergeMode = (string) $data;
        }

        return $this->mergeMode;
    }

    /**
     * <ul>
     * <li>If <code>true</code>, the <a href="ctp:api:type:LineItem">LineItem</a> Product data (<code>name</code>, <code>variant</code>, and <code>productType</code>) of the returned Cart will be updated.</li>
     * <li>If <code>false</code>, only the prices, discounts, and tax rates will be updated.</li>
     * </ul>
     *
     *
     * @return null|bool
     */
    public function getUpdateProductData()
    {
        if (is_null($this->updateProductData)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_UPDATE_PRODUCT_DATA);
            if (is_null($data)) {
                return null;
            }
            $this->updateProductData = (bool) $data;
        }

        return $this->updateProductData;
    }

    /**
     * <p>Assigns the Customer to the <a href="ctp:api:type:Cart">Carts</a> that have the same <code>anonymousId</code>. Required if <code>anonymousCart</code> is not provided.
     * If both <code>anonymousCart</code> and <code>anonymousId</code> are provided, this value must match the <code>anonymousId</code> of the anonymous <a href="ctp:api:type:Cart">Cart</a> otherwise, an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error is returned.</p>
     *
     *
     * @return null|string
     */
    public function getAnonymousId()
    {
        if (is_null($this->anonymousId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ANONYMOUS_ID);
            if (is_null($data)) {
                return null;
            }
            $this->anonymousId = (string) $data;
        }

        return $this->anonymousId;
    }


    /**
     * @param ?CartResourceIdentifier $anonymousCart
     */
    public function setAnonymousCart(?CartResourceIdentifier $anonymousCart): void
    {
        $this->anonymousCart = $anonymousCart;
    }

    /**
     * @param ?string $mergeMode
     */
    public function setMergeMode(?string $mergeMode): void
    {
        $this->mergeMode = $mergeMode;
    }

    /**
     * @param ?bool $updateProductData
     */
    public function setUpdateProductData(?bool $updateProductData): void
    {
        $this->updateProductData = $updateProductData;
    }

    /**
     * @param ?string $anonymousId
     */
    public function setAnonymousId(?string $anonymousId): void
    {
        $this->anonymousId = $anonymousId;
    }
}
