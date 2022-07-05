<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<TaxCategoryRemoveTaxRateAction>
 */
final class TaxCategoryRemoveTaxRateActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $taxRateId;

    /**
     * <p>ID of the TaxRate to remove.</p>
     *

     * @return null|string
     */
    public function getTaxRateId()
    {
        return $this->taxRateId;
    }

    /**
     * @param ?string $taxRateId
     * @return $this
     */
    public function withTaxRateId(?string $taxRateId)
    {
        $this->taxRateId = $taxRateId;

        return $this;
    }


    public function build(): TaxCategoryRemoveTaxRateAction
    {
        return new TaxCategoryRemoveTaxRateActionModel(
            $this->taxRateId
        );
    }

    public static function of(): TaxCategoryRemoveTaxRateActionBuilder
    {
        return new self();
    }
}
