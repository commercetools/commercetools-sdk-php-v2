<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifierBuilder;

/**
 * @implements Builder<ShippingMethodChangeTaxCategoryAction>
 */
final class ShippingMethodChangeTaxCategoryActionBuilder implements Builder
{
    /**
     * @var null|TaxCategoryResourceIdentifier|TaxCategoryResourceIdentifierBuilder
     */
    private $taxCategory;

    /**
     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory()
    {
        return $this->taxCategory instanceof TaxCategoryResourceIdentifierBuilder ? $this->taxCategory->build() : $this->taxCategory;
    }

    /**
     * @return $this
     */
    public function withTaxCategory(?TaxCategoryResourceIdentifier $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxCategoryBuilder(?TaxCategoryResourceIdentifierBuilder $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    public function build(): ShippingMethodChangeTaxCategoryAction
    {
        return new ShippingMethodChangeTaxCategoryActionModel(
            $this->taxCategory instanceof TaxCategoryResourceIdentifierBuilder ? $this->taxCategory->build() : $this->taxCategory
        );
    }

    public static function of(): ShippingMethodChangeTaxCategoryActionBuilder
    {
        return new self();
    }
}
