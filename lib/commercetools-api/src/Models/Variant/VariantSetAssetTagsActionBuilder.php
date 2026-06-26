<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<VariantSetAssetTagsAction>
 */
final class VariantSetAssetTagsActionBuilder implements Builder
{
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

     * @var ?array
     */
    private $tags;

    /**
     * <p>If <code>true</code>, only the staged Asset is updated. If <code>false</code>, both the current and staged Asset is updated.</p>
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
     * <p>Keywords for categorizing and organizing Assets.</p>
     *

     * @return null|array
     */
    public function getTags()
    {
        return $this->tags;
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
     * @param ?array $tags
     * @return $this
     */
    public function withTags(?array $tags)
    {
        $this->tags = $tags;

        return $this;
    }


    public function build(): VariantSetAssetTagsAction
    {
        return new VariantSetAssetTagsActionModel(
            $this->staged,
            $this->assetId,
            $this->assetKey,
            $this->tags
        );
    }

    public static function of(): VariantSetAssetTagsActionBuilder
    {
        return new self();
    }
}
