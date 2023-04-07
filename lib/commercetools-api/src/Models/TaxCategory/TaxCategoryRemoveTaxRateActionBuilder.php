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

     * @var ?string
     */
    private $taxRateKey;

    /**
     * <p>ID of the TaxRate to remove.
     * Either <code>taxRateId</code> or <code>taxRateKey</code> is required for this update action.</p>
     *

     * @return null|string
     */
    public function getTaxRateId()
    {
        return $this->taxRateId;
    }

    /**
     * <p>Key of the TaxRate to remove.
     * Either <code>taxRateId</code> or <code>taxRateKey</code> is required for this update action.</p>
     *

     * @return null|string
     */
    public function getTaxRateKey()
    {
        return $this->taxRateKey;
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

    /**
     * @param ?string $taxRateKey
     * @return $this
     */
    public function withTaxRateKey(?string $taxRateKey)
    {
        $this->taxRateKey = $taxRateKey;

        return $this;
    }


    public function build(): TaxCategoryRemoveTaxRateAction
    {
        return new TaxCategoryRemoveTaxRateActionModel(
            $this->taxRateId,
            $this->taxRateKey
        );
    }

    public static function of(): TaxCategoryRemoveTaxRateActionBuilder
    {
        return new self();
    }
}
