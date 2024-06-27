<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Api\Models\Common\AssetDraftCollection;
use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductTailoringAddVariantAction>
 */
final class ProductTailoringAddVariantActionBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $id;

    /**

     * @var ?string
     */
    private $sku;

    /**

     * @var ?ImageCollection
     */
    private $images;

    /**

     * @var ?AssetDraftCollection
     */
    private $assets;

    /**

     * @var ?bool
     */
    private $staged;

    /**
     * <p>The <code>id</code> of the tailored ProductVariant to update.</p>
     *

     * @return null|int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>The <code>sku</code> of the tailored ProductVariant to update.</p>
     *

     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <p>Images for the Product Variant Tailoring.</p>
     *

     * @return null|ImageCollection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * <p>Media assets for the Product Variant Tailoring.</p>
     *

     * @return null|AssetDraftCollection
     */
    public function getAssets()
    {
        return $this->assets;
    }

    /**
     * <p>If <code>true</code> the new Product Variant Tailoring is only staged. If <code>false</code> the new Product Variant Tailoring is both current and staged.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @param ?int $id
     * @return $this
     */
    public function withId(?int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?string $sku
     * @return $this
     */
    public function withSku(?string $sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @param ?ImageCollection $images
     * @return $this
     */
    public function withImages(?ImageCollection $images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * @param ?AssetDraftCollection $assets
     * @return $this
     */
    public function withAssets(?AssetDraftCollection $assets)
    {
        $this->assets = $assets;

        return $this;
    }

    /**
     * @param ?bool $staged
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }


    public function build(): ProductTailoringAddVariantAction
    {
        return new ProductTailoringAddVariantActionModel(
            $this->id,
            $this->sku,
            $this->images,
            $this->assets,
            $this->staged
        );
    }

    public static function of(): ProductTailoringAddVariantActionBuilder
    {
        return new self();
    }
}
