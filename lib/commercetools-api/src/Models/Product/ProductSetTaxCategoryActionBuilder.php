<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductSetTaxCategoryAction>
 */
final class ProductSetTaxCategoryActionBuilder implements Builder
{
    /**

     * @var null|TaxCategoryResourceIdentifier|TaxCategoryResourceIdentifierBuilder
     */
    private $taxCategory;

    /**
     * <p>The Tax Category to set. If empty, any existing value will be removed.</p>
     *

     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory()
    {
        return $this->taxCategory instanceof TaxCategoryResourceIdentifierBuilder ? $this->taxCategory->build() : $this->taxCategory;
    }

    /**
     * @param ?TaxCategoryResourceIdentifier $taxCategory
     * @return $this
     */
    public function withTaxCategory(?TaxCategoryResourceIdentifier $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    /**
     * @deprecated use withTaxCategory() instead
     * @return $this
     */
    public function withTaxCategoryBuilder(?TaxCategoryResourceIdentifierBuilder $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    public function build(): ProductSetTaxCategoryAction
    {
        return new ProductSetTaxCategoryActionModel(
            $this->taxCategory instanceof TaxCategoryResourceIdentifierBuilder ? $this->taxCategory->build() : $this->taxCategory
        );
    }

    public static function of(): ProductSetTaxCategoryActionBuilder
    {
        return new self();
    }
}
