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
 * @implements Builder<SetAssetCustomFieldChange>
 */
final class SetAssetCustomFieldChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|mixed|mixed
     */
    private $previousValue;

    /**

     * @var null|mixed|mixed
     */
    private $nextValue;

    /**

     * @var ?string
     */
    private $name;

    /**

     * @var ?string
     */
    private $customTypeId;

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

     * @return null|mixed
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|mixed
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * <p>Name of the <a href="/../api/projects/custom-fields">Custom Field</a>.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p><code>id</code> of the referenced <a href="ctp:api:type:Type">Type</a>.</p>
     *

     * @return null|string
     */
    public function getCustomTypeId()
    {
        return $this->customTypeId;
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
     * @param mixed $previousValue
     * @return $this
     */
    public function withPreviousValue( $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param mixed $nextValue
     * @return $this
     */
    public function withNextValue( $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?string $customTypeId
     * @return $this
     */
    public function withCustomTypeId(?string $customTypeId)
    {
        $this->customTypeId = $customTypeId;

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
     * @deprecated use withAsset() instead
     * @return $this
     */
    public function withAssetBuilder(?AssetChangeValueBuilder $asset)
    {
        $this->asset = $asset;

        return $this;
    }

    public function build(): SetAssetCustomFieldChange
    {
        return new SetAssetCustomFieldChangeModel(
            $this->change,
            $this->previousValue,
            $this->nextValue,
            $this->name,
            $this->customTypeId,
            $this->asset instanceof AssetChangeValueBuilder ? $this->asset->build() : $this->asset
        );
    }

    public static function of(): SetAssetCustomFieldChangeBuilder
    {
        return new self();
    }
}
