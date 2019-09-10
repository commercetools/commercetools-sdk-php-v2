<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductRevertStagedVariantChangesAction>
 */
final class ProductRevertStagedVariantChangesActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?int
     */
    private $variantId;

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
     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
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
    public function withVariantId(?int $variantId)
    {
        $this->variantId = $variantId;

        return $this;
    }

    public function build(): ProductRevertStagedVariantChangesAction
    {
        return new ProductRevertStagedVariantChangesActionModel(
            $this->action,
            $this->variantId
        );
    }

    public static function of(): ProductRevertStagedVariantChangesActionBuilder
    {
        return new self();
    }
}
