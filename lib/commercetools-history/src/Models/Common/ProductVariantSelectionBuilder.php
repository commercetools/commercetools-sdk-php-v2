<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductVariantSelection>
 */
final class ProductVariantSelectionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $type;

    /**
     * <p>Determines whether the SKUs are to be included in, or excluded from, the Product Selection.</p>
     *

     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param ?string $type
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }


    public function build(): ProductVariantSelection
    {
        return new ProductVariantSelectionModel(
            $this->type
        );
    }

    public static function of(): ProductVariantSelectionBuilder
    {
        return new self();
    }
}
