<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Api\Models\Common\AssetDraftCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<VariantSetAssetsAction>
 */
final class VariantSetAssetsActionBuilder implements Builder
{
    /**

     * @var ?AssetDraftCollection
     */
    private $assets;

    /**

     * @var ?bool
     */
    private $staged;

    /**
     * <p>Assets to set for the Variant.</p>
     *

     * @return null|AssetDraftCollection
     */
    public function getAssets()
    {
        return $this->assets;
    }

    /**
     * <p>If <code>true</code>, only the staged assets are set. If <code>false</code>, both the current and staged assets are updated.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @param ?AssetDraftCollection $assets
     * @return $this
     */
    public function withAssets(?AssetDraftCollection $assets)
    {
        $this->assets = $assets;

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


    public function build(): VariantSetAssetsAction
    {
        return new VariantSetAssetsActionModel(
            $this->assets,
            $this->staged
        );
    }

    public static function of(): VariantSetAssetsActionBuilder
    {
        return new self();
    }
}
