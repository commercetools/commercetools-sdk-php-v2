<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Api\Models\Common\QueryPrice;
use Commercetools\Api\Models\Common\QueryPriceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductDiscountMatchQueryModel extends JsonObjectModel implements ProductDiscountMatchQuery
{
    /**

     * @var ?string
     */
    protected $productId;

    /**

     * @var ?int
     */
    protected $variantId;

    /**

     * @var ?bool
     */
    protected $staged;

    /**

     * @var ?QueryPrice
     */
    protected $price;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $productId = null,
        ?int $variantId = null,
        ?bool $staged = null,
        ?QueryPrice $price = null
    ) {
        $this->productId = $productId;
        $this->variantId = $variantId;
        $this->staged = $staged;
        $this->price = $price;
    }

    /**
     * <p>ID of the specified Product.</p>
     *

     * @return null|string
     */
    public function getProductId()
    {
        if (is_null($this->productId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PRODUCT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->productId = (string) $data;
        }

        return $this->productId;
    }

    /**
     * <p>ID of the specified Product Variant.</p>
     *

     * @return null|int
     */
    public function getVariantId()
    {
        if (is_null($this->variantId)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VARIANT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->variantId = (int) $data;
        }

        return $this->variantId;
    }

    /**
     * <p>Controls which <a href="/../api/projects/productProjections#current--staged">projected representation</a> is applied for the query.
     * Set to <code>true</code> for the <code>staged</code> Product Projection of the specified Product Variant, set to <code>false</code> for the <code>current</code> one.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }
            $this->staged = (bool) $data;
        }

        return $this->staged;
    }

    /**
     * <p>Specified Price of the specified Product Variant.</p>
     *

     * @return null|QueryPrice
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->price = QueryPriceModel::of($data);
        }

        return $this->price;
    }


    /**
     * @param ?string $productId
     */
    public function setProductId(?string $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }

    /**
     * @param ?QueryPrice $price
     */
    public function setPrice(?QueryPrice $price): void
    {
        $this->price = $price;
    }
}
