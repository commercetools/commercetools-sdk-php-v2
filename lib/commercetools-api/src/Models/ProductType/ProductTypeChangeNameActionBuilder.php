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
 * @implements Builder<ProductTypeChangeNameAction>
 */
final class ProductTypeChangeNameActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $name;

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }


    public function build(): ProductTypeChangeNameAction
    {
        return new ProductTypeChangeNameActionModel(
            $this->name
        );
    }

    public static function of(): ProductTypeChangeNameActionBuilder
    {
        return new self();
    }
}
