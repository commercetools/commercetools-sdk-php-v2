<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductCatalogData>
 */
final class ProductCatalogDataBuilder implements Builder
{
    /**

     * @var ?bool
     */
    private $published;

    /**

     * @var null|ProductData|ProductDataBuilder
     */
    private $current;

    /**

     * @var null|ProductData|ProductDataBuilder
     */
    private $staged;

    /**

     * @var ?bool
     */
    private $hasStagedChanges;

    /**
     * <p><code>true</code> if the Product is published.</p>
     *

     * @return null|bool
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * <p>Current (published) data of the Product.</p>
     *

     * @return null|ProductData
     */
    public function getCurrent()
    {
        return $this->current instanceof ProductDataBuilder ? $this->current->build() : $this->current;
    }

    /**
     * <p>Staged (unpublished) data of the Product.</p>
     *

     * @return null|ProductData
     */
    public function getStaged()
    {
        return $this->staged instanceof ProductDataBuilder ? $this->staged->build() : $this->staged;
    }

    /**
     * <p><code>true</code> if the <code>staged</code> data is different from the <code>current</code> data.</p>
     *

     * @return null|bool
     */
    public function getHasStagedChanges()
    {
        return $this->hasStagedChanges;
    }

    /**
     * @param ?bool $published
     * @return $this
     */
    public function withPublished(?bool $published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * @param ?ProductData $current
     * @return $this
     */
    public function withCurrent(?ProductData $current)
    {
        $this->current = $current;

        return $this;
    }

    /**
     * @param ?ProductData $staged
     * @return $this
     */
    public function withStaged(?ProductData $staged)
    {
        $this->staged = $staged;

        return $this;
    }

    /**
     * @param ?bool $hasStagedChanges
     * @return $this
     */
    public function withHasStagedChanges(?bool $hasStagedChanges)
    {
        $this->hasStagedChanges = $hasStagedChanges;

        return $this;
    }

    /**
     * @deprecated use withCurrent() instead
     * @return $this
     */
    public function withCurrentBuilder(?ProductDataBuilder $current)
    {
        $this->current = $current;

        return $this;
    }

    /**
     * @deprecated use withStaged() instead
     * @return $this
     */
    public function withStagedBuilder(?ProductDataBuilder $staged)
    {
        $this->staged = $staged;

        return $this;
    }

    public function build(): ProductCatalogData
    {
        return new ProductCatalogDataModel(
            $this->published,
            $this->current instanceof ProductDataBuilder ? $this->current->build() : $this->current,
            $this->staged instanceof ProductDataBuilder ? $this->staged->build() : $this->staged,
            $this->hasStagedChanges
        );
    }

    public static function of(): ProductCatalogDataBuilder
    {
        return new self();
    }
}
