<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;

/**
 * @implements Builder<MyCartRecalculateAction>
 */
final class MyCartRecalculateActionBuilder implements Builder
{
    /**
     * @var ?bool
     */
    private $updateProductData;

    /**
     * @return null|bool
     */
    public function getUpdateProductData()
    {
        return $this->updateProductData;
    }

    /**
     * @return $this
     */
    public function withUpdateProductData(?bool $updateProductData)
    {
        $this->updateProductData = $updateProductData;

        return $this;
    }

    public function build(): MyCartRecalculateAction
    {
        return new MyCartRecalculateActionModel(
            $this->updateProductData
        );
    }

    public static function of(): MyCartRecalculateActionBuilder
    {
        return new self();
    }
}
