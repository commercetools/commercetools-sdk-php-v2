<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\AssetSourceCollection;

/**
 * @implements Builder<ProductSetAssetSourcesAction>
 */
final class ProductSetAssetSourcesActionBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $variantId;

    /**
     * @var ?string
     */
    private $sku;

    /**
     * @var ?bool
     */
    private $staged;

    /**
     * @var ?string
     */
    private $assetId;

    /**
     * @var ?string
     */
    private $assetKey;

    /**
     * @var ?AssetSourceCollection
     */
    private $sources;

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
     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @return null|string
     */
    public function getAssetId()
    {
        return $this->assetId;
    }

    /**
     * @return null|string
     */
    public function getAssetKey()
    {
        return $this->assetKey;
    }

    /**
     * @return null|AssetSourceCollection
     */
    public function getSources()
    {
        return $this->sources;
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
    public function withAssetId(?string $assetId)
    {
        $this->assetId = $assetId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAssetKey(?string $assetKey)
    {
        $this->assetKey = $assetKey;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSources(?AssetSourceCollection $sources)
    {
        $this->sources = $sources;

        return $this;
    }


    public function build(): ProductSetAssetSourcesAction
    {
        return new ProductSetAssetSourcesActionModel(
            $this->variantId,
            $this->sku,
            $this->staged,
            $this->assetId,
            $this->assetKey,
            $this->sources
        );
    }

    public static function of(): ProductSetAssetSourcesActionBuilder
    {
        return new self();
    }
}
