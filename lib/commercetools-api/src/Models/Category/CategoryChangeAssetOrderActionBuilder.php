<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CategoryChangeAssetOrderAction>
 */
final class CategoryChangeAssetOrderActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?array
     */
    private $assetOrder;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return null|array
     */
    public function getAssetOrder()
    {
        return $this->assetOrder;
    }

    /**
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
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
            $this->action,
            $this->assetOrder
        );
    }

    public static function of(): CategoryChangeAssetOrderActionBuilder
    {
        return new self();
    }
}
