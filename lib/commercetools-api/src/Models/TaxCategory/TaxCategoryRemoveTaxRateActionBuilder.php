<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\Builder;

/**
 * @implements Builder<TaxCategoryRemoveTaxRateAction>
 */
final class TaxCategoryRemoveTaxRateActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?string
     */
    private $taxRateId;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getTaxRateId()
    {
        return $this->taxRateId;
    }

    /**
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
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
            $this->action,
            $this->taxRateId
        );
    }

    public static function of(): TaxCategoryRemoveTaxRateActionBuilder
    {
        return new self();
    }
}
