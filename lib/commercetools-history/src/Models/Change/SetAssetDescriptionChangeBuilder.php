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
use Commercetools\History\Models\Common\LocalizedString;
use Commercetools\History\Models\Common\LocalizedStringBuilder;

/**
 * @implements Builder<SetAssetDescriptionChange>
 */
final class SetAssetDescriptionChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $previousValue;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
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

     * @return null|LocalizedString
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof LocalizedStringBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|LocalizedString
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof LocalizedStringBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?LocalizedString $previousValue
     * @return $this
     */
    public function withPreviousValue(?LocalizedString $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?LocalizedString $nextValue
     * @return $this
     */
    public function withNextValue(?LocalizedString $nextValue)
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
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?LocalizedStringBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?LocalizedStringBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

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

    public function build(): SetAssetDescriptionChange
    {
        return new SetAssetDescriptionChangeModel(
            $this->change,
            $this->previousValue instanceof LocalizedStringBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof LocalizedStringBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->asset instanceof AssetChangeValueBuilder ? $this->asset->build() : $this->asset,
            $this->catalogData,
            $this->variant
        );
    }

    public static function of(): SetAssetDescriptionChangeBuilder
    {
        return new self();
    }
}
