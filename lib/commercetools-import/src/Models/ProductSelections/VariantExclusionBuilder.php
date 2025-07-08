<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\ProductSelections;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<VariantExclusion>
 */
final class VariantExclusionBuilder implements Builder
{
    /**

     * @var ?array
     */
    private $skus;

    /**
     * <p>List of SKUs to be excluded.</p>
     *

     * @return null|array
     */
    public function getSkus()
    {
        return $this->skus;
    }

    /**
     * @param ?array $skus
     * @return $this
     */
    public function withSkus(?array $skus)
    {
        $this->skus = $skus;

        return $this;
    }


    public function build(): VariantExclusion
    {
        return new VariantExclusionModel(
            $this->skus
        );
    }

    public static function of(): VariantExclusionBuilder
    {
        return new self();
    }
}
