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
use Commercetools\History\Models\Common\CustomFields;
use Commercetools\History\Models\Common\CustomFieldsBuilder;

/**
 * @implements Builder<SetAssetCustomTypeChange>
 */
final class SetAssetCustomTypeChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $previousValue;

    /**

     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $nextValue;

    /**

     * @var null|AssetChangeValue|AssetChangeValueBuilder
     */
    private $asset;

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

     * @return null|CustomFields
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof CustomFieldsBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|CustomFields
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof CustomFieldsBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?string $change
     * @return $this
     */
    public function withChange(?string $change)
    {
        $this->change = $change;

        return $this;
    }

    /**
     * @param ?CustomFields $previousValue
     * @return $this
     */
    public function withPreviousValue(?CustomFields $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?CustomFields $nextValue
     * @return $this
     */
    public function withNextValue(?CustomFields $nextValue)
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
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?CustomFieldsBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?CustomFieldsBuilder $nextValue)
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

    public function build(): SetAssetCustomTypeChange
    {
        return new SetAssetCustomTypeChangeModel(
            $this->change,
            $this->previousValue instanceof CustomFieldsBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof CustomFieldsBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->asset instanceof AssetChangeValueBuilder ? $this->asset->build() : $this->asset
        );
    }

    public static function of(): SetAssetCustomTypeChangeBuilder
    {
        return new self();
    }
}
