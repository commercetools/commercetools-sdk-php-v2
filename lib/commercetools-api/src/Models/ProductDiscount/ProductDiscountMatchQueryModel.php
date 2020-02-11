<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\QueryPrice;
use Commercetools\Api\Models\Common\QueryPriceModel;

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


    public function __construct(
        string $productId = null,
        int $variantId = null,
        bool $staged = null,
        QueryPrice $price = null
    ) {
        $this->productId = $productId;
        $this->variantId = $variantId;
        $this->staged = $staged;
        $this->price = $price;

    }

    /**
     * @return null|string
     */
    public function getProductId()
    {
        if (is_null($this->productId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductDiscountMatchQuery::FIELD_PRODUCT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->productId = (string) $data;
        }

        return $this->productId;
    }

    /**
     * @return null|int
     */
    public function getVariantId()
    {
        if (is_null($this->variantId)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ProductDiscountMatchQuery::FIELD_VARIANT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->variantId = (int) $data;
        }

        return $this->variantId;
    }

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(ProductDiscountMatchQuery::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }
            $this->staged = (bool) $data;
        }

        return $this->staged;
    }

    /**
     * @return null|QueryPrice
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductDiscountMatchQuery::FIELD_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->price = QueryPriceModel::of($data);
        }

        return $this->price;
    }

    public function setProductId(?string $productId): void
    {
        $this->productId = $productId;
    }

    public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }

    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }

    public function setPrice(?QueryPrice $price): void
    {
        $this->price = $price;
    }



}
