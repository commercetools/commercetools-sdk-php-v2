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
 * @implements Builder<VariantSelection>
 */
final class VariantSelectionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $type;

    /**

     * @var ?array
     */
    private $skus;

    /**
     * <p>Type of variant selection.</p>
     *

     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * <p>List of SKUs to include or exclude.</p>
     *

     * @return null|array
     */
    public function getSkus()
    {
        return $this->skus;
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

    /**
     * @param ?array $skus
     * @return $this
     */
    public function withSkus(?array $skus)
    {
        $this->skus = $skus;

        return $this;
    }


    public function build(): VariantSelection
    {
        return new VariantSelectionModel(
            $this->type,
            $this->skus
        );
    }

    public static function of(): VariantSelectionBuilder
    {
        return new self();
    }
}
