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
use Commercetools\History\Models\Common\Asset;
use Commercetools\History\Models\Common\AssetBuilder;

/**
 * @implements Builder<AddAssetChange>
 */
final class AddAssetChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|Asset|AssetBuilder
     */
    private $nextValue;

    /**

     * @var null|Asset|AssetBuilder
     */
    private $previousValue;

    /**
     * <p>Update action for <code>addAsset</code></p>
     *

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**

     * @return null|Asset
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof AssetBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**

     * @return null|Asset
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof AssetBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?Asset $nextValue
     * @return $this
     */
    public function withNextValue(?Asset $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?Asset $previousValue
     * @return $this
     */
    public function withPreviousValue(?Asset $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?AssetBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?AssetBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): AddAssetChange
    {
        return new AddAssetChangeModel(
            $this->change,
            $this->nextValue instanceof AssetBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->previousValue instanceof AssetBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): AddAssetChangeBuilder
    {
        return new self();
    }
}
