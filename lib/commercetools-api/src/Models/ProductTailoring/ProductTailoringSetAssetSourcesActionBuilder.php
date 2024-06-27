<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Api\Models\Common\AssetSourceCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductTailoringSetAssetSourcesAction>
 */
final class ProductTailoringSetAssetSourcesActionBuilder implements Builder
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
     * <p>The <code>id</code> of the tailored ProductVariant to update.</p>
     *

     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
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
     * <p>If <code>true</code>, only the staged Asset is updated. If <code>false</code> both the current and staged Asset is updated.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * <p>The <code>id</code> of the Asset to update.</p>
     *

     * @return null|string
     */
    public function getAssetId()
    {
        return $this->assetId;
    }

    /**
     * <p>The <code>key</code> of the Asset to update.</p>
     *

     * @return null|string
     */
    public function getAssetKey()
    {
        return $this->assetKey;
    }

    /**
     * <p>Value to set.</p>
     *

     * @return null|AssetSourceCollection
     */
    public function getSources()
    {
        return $this->sources;
    }

    /**
     * @param ?int $variantId
     * @return $this
     */
    public function withVariantId(?int $variantId)
    {
        $this->variantId = $variantId;

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
     * @param ?bool $staged
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }

    /**
     * @param ?string $assetId
     * @return $this
     */
    public function withAssetId(?string $assetId)
    {
        $this->assetId = $assetId;

        return $this;
    }

    /**
     * @param ?string $assetKey
     * @return $this
     */
    public function withAssetKey(?string $assetKey)
    {
        $this->assetKey = $assetKey;

        return $this;
    }

    /**
     * @param ?AssetSourceCollection $sources
     * @return $this
     */
    public function withSources(?AssetSourceCollection $sources)
    {
        $this->sources = $sources;

        return $this;
    }


    public function build(): ProductTailoringSetAssetSourcesAction
    {
        return new ProductTailoringSetAssetSourcesActionModel(
            $this->variantId,
            $this->sku,
            $this->staged,
            $this->assetId,
            $this->assetKey,
            $this->sources
        );
    }

    public static function of(): ProductTailoringSetAssetSourcesActionBuilder
    {
        return new self();
    }
}
