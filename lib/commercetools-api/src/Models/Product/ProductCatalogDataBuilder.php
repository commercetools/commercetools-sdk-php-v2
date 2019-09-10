<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductCatalogData>
 */
final class ProductCatalogDataBuilder implements Builder
{
    /**
     * @var ProductData|?ProductDataBuilder
     */
    private $current;

    /**
     * @var ProductData|?ProductDataBuilder
     */
    private $staged;

    /**
     * @var ?bool
     */
    private $published;

    /**
     * @var ?bool
     */
    private $hasStagedChanges;

    public function __construct()
    {
    }

    /**
     * @return null|ProductData
     */
    public function getCurrent()
    {
        return $this->current instanceof ProductDataBuilder ? $this->current->build() : $this->current;
    }

    /**
     * @return null|ProductData
     */
    public function getStaged()
    {
        return $this->staged instanceof ProductDataBuilder ? $this->staged->build() : $this->staged;
    }

    /**
     * @return null|bool
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * @return null|bool
     */
    public function getHasStagedChanges()
    {
        return $this->hasStagedChanges;
    }

    /**
     * @return $this
     */
    public function withCurrent(?ProductData $current)
    {
        $this->current = $current;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStaged(?ProductData $staged)
    {
        $this->staged = $staged;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPublished(?bool $published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * @return $this
     */
    public function withHasStagedChanges(?bool $hasStagedChanges)
    {
        $this->hasStagedChanges = $hasStagedChanges;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCurrentBuilder(?ProductDataBuilder $current)
    {
        $this->current = $current;

        return $this;
    }

    /**
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
            ($this->current instanceof ProductDataBuilder ? $this->current->build() : $this->current),
            ($this->staged instanceof ProductDataBuilder ? $this->staged->build() : $this->staged),
            $this->published,
            $this->hasStagedChanges
        );
    }

    public static function of(): ProductCatalogDataBuilder
    {
        return new self();
    }
}
