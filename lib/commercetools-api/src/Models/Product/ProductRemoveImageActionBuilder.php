<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductRemoveImageAction>
 */
final class ProductRemoveImageActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $imageUrl;

    /**
     * @var ?bool
     */
    private $staged;

    /**
     * @var ?int
     */
    private $variantId;

    /**
     * @var ?string
     */
    private $sku;

    /**
     * @return null|string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @return $this
     */
    public function withImageUrl(?string $imageUrl)
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVariantId(?int $variantId)
    {
        $this->variantId = $variantId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSku(?string $sku)
    {
        $this->sku = $sku;

        return $this;
    }

    public function build(): ProductRemoveImageAction
    {
        return new ProductRemoveImageActionModel(
            $this->imageUrl,
            $this->staged,
            $this->variantId,
            $this->sku
        );
    }

    public static function of(): ProductRemoveImageActionBuilder
    {
        return new self();
    }
}
