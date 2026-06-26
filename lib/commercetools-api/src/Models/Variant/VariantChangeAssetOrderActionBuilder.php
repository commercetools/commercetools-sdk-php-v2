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
 * @implements Builder<VariantChangeAssetOrderAction>
 */
final class VariantChangeAssetOrderActionBuilder implements Builder
{
    /**

     * @var ?bool
     */
    private $staged;

    /**

     * @var ?array
     */
    private $assetOrder;

    /**
     * <p>If <code>true</code>, only the staged <code>assets</code> is updated. If <code>false</code>, both the current and staged <code>assets</code> are updated.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * <p>All existing Asset <code>id</code>s of the Variant in the desired new order.</p>
     *

     * @return null|array
     */
    public function getAssetOrder()
    {
        return $this->assetOrder;
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
     * @param ?array $assetOrder
     * @return $this
     */
    public function withAssetOrder(?array $assetOrder)
    {
        $this->assetOrder = $assetOrder;

        return $this;
    }


    public function build(): VariantChangeAssetOrderAction
    {
        return new VariantChangeAssetOrderActionModel(
            $this->staged,
            $this->assetOrder
        );
    }

    public static function of(): VariantChangeAssetOrderActionBuilder
    {
        return new self();
    }
}
