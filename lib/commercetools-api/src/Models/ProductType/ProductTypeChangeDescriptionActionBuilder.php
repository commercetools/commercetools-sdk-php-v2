<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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
     * <p>New value to set.</p>
     *

     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param ?string $description
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
