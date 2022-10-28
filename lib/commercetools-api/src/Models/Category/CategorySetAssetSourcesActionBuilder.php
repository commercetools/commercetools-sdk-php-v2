<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Common\AssetSourceCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CategorySetAssetSourcesAction>
 */
final class CategorySetAssetSourcesActionBuilder implements Builder
{
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
     * <p>New value to set. Either <code>assetId</code> or <code>assetKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getAssetId()
    {
        return $this->assetId;
    }

    /**
     * <p>New value to set. Either <code>assetId</code> or <code>assetKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getAssetKey()
    {
        return $this->assetKey;
    }

    /**
     * <p>Must not be empty. At least one entry is required.</p>
     *

     * @return null|AssetSourceCollection
     */
    public function getSources()
    {
        return $this->sources;
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


    public function build(): CategorySetAssetSourcesAction
    {
        return new CategorySetAssetSourcesActionModel(
            $this->assetId,
            $this->assetKey,
            $this->sources
        );
    }

    public static function of(): CategorySetAssetSourcesActionBuilder
    {
        return new self();
    }
}
