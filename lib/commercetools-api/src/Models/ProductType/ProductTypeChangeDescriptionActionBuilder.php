<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductTypeChangeDescriptionAction>
 */
final class ProductTypeChangeDescriptionActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $description;

    /**
     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return $this
     */
    public function withDescription(?string $description)
    {
        $this->description = $description;

        return $this;
    }

    public function build(): ProductTypeChangeDescriptionAction
    {
        return new ProductTypeChangeDescriptionActionModel(
            $this->description
        );
    }

    public static function of(): ProductTypeChangeDescriptionActionBuilder
    {
        return new self();
    }
}
