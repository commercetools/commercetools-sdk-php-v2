<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<RemoveAssetAction>
 */
final class RemoveAssetActionBuilder implements Builder
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
     * @return $this
     */
    public function withPreviousValueBuilder(?AssetBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): RemoveAssetAction
    {
        return new RemoveAssetActionModel(
            $this->change,
            $this->previousValue instanceof AssetBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): RemoveAssetActionBuilder
    {
        return new self();
    }
}
