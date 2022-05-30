<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CategoryChangeAssetOrderAction>
 */
final class CategoryChangeAssetOrderActionBuilder implements Builder
{
    /**
     * @var ?array
     */
    private $assetOrder;

    /**
     * <p>New value to set. Must contain all Asset <code>id</code>s.</p>
     *
     * @return null|array
     */
    public function getAssetOrder()
    {
        return $this->assetOrder;
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


    public function build(): CategoryChangeAssetOrderAction
    {
        return new CategoryChangeAssetOrderActionModel(
            $this->assetOrder
        );
    }

    public static function of(): CategoryChangeAssetOrderActionBuilder
    {
        return new self();
    }
}
