<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\ChangeValue\AssetChangeValue;
use Commercetools\History\Models\ChangeValue\AssetChangeValueBuilder;

/**
 * @implements Builder<SetAssetKeyChange>
 */
final class SetAssetKeyChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?string
     */
    private $previousValue;

    /**

     * @var ?string
     */
    private $nextValue;

    /**

     * @var null|AssetChangeValue|AssetChangeValueBuilder
     */
    private $asset;

    /**

     * @var ?string
     */
    private $catalogData;

    /**

     * @var ?string
     */
    private $variant;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|string
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|string
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * <p>Information about the updated Asset.</p>
     *

     * @return null|AssetChangeValue
     */
    public function getAsset()
    {
        return $this->asset instanceof AssetChangeValueBuilder ? $this->asset->build() : $this->asset;
    }

    /**
     * <p>Product data that was updated.</p>
     * <ul>
     * <li><code>staged</code>, if the staged <a href="ctp:api:type:ProductCatalogData">ProductCatalogData</a> was updated.</li>
     * <li><code>current</code>, if the current <a href="ctp:api:type:ProductCatalogData">ProductCatalogData</a> was updated.</li>
     * </ul>
     *

     * @return null|string
     */
    public function getCatalogData()
    {
        return $this->catalogData;
    }

    /**
     * <p>Identifier of the updated Product Variant.</p>
     * <p>This field holds the SKU, if defined; otherwise the key; otherwise the ID.</p>
     *

     * @return null|string
     */
    public function getVariant()
    {
        return $this->variant;
    }

    /**
     * @param ?string $change
     * @return $this
     */
    public function withChange(?string $change)
    {
        $this->change = $change;

        return $this;
    }

    /**
     * @param ?string $previousValue
     * @return $this
     */
    public function withPreviousValue(?string $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?string $nextValue
     * @return $this
     */
    public function withNextValue(?string $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?AssetChangeValue $asset
     * @return $this
     */
    public function withAsset(?AssetChangeValue $asset)
    {
        $this->asset = $asset;

        return $this;
    }

    /**
     * @param ?string $catalogData
     * @return $this
     */
    public function withCatalogData(?string $catalogData)
    {
        $this->catalogData = $catalogData;

        return $this;
    }

    /**
     * @param ?string $variant
     * @return $this
     */
    public function withVariant(?string $variant)
    {
        $this->variant = $variant;

        return $this;
    }

    /**
     * @deprecated use withAsset() instead
     * @return $this
     */
    public function withAssetBuilder(?AssetChangeValueBuilder $asset)
    {
        $this->asset = $asset;

        return $this;
    }

    public function build(): SetAssetKeyChange
    {
        return new SetAssetKeyChangeModel(
            $this->change,
            $this->previousValue,
            $this->nextValue,
            $this->asset instanceof AssetChangeValueBuilder ? $this->asset->build() : $this->asset,
            $this->catalogData,
            $this->variant
        );
    }

    public static function of(): SetAssetKeyChangeBuilder
    {
        return new self();
    }
}
