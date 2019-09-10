<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductRevertStagedChangesAction>
 */
final class ProductRevertStagedChangesActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

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
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    public function build(): ProductRevertStagedChangesAction
    {
        return new ProductRevertStagedChangesActionModel(
            $this->action
        );
    }

    public static function of(): ProductRevertStagedChangesActionBuilder
    {
        return new self();
    }
}
