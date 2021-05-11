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
 * @implements Builder<RemoveAssetChange>
 */
final class RemoveAssetChangeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|Asset|AssetBuilder
     */
    private $previousValue;

    /**
     * <p>Update action for <code>removeAsset</code></p>
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
     * @param ?Asset $previousValue
     * @return $this
     */
    public function withPreviousValue(?Asset $previousValue)
    {
        $this->previousValue = $previousValue;

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

    public function build(): RemoveAssetChange
    {
        return new RemoveAssetChangeModel(
            $this->change,
            $this->previousValue instanceof AssetBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): RemoveAssetChangeBuilder
    {
        return new self();
    }
}
