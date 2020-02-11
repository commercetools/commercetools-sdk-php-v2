<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

final class TaxCategoryReplaceTaxRateActionModel extends JsonObjectModel implements TaxCategoryReplaceTaxRateAction
{
    public const DISCRIMINATOR_VALUE = 'replaceTaxRate';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $taxRateId;

    /**
     * @var ?TaxRateDraft
     */
    protected $taxRate;


    public function __construct(
        string $taxRateId = null,
        TaxRateDraft $taxRate = null
    ) {
        $this->taxRateId = $taxRateId;
        $this->taxRate = $taxRate;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(TaxCategoryUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getTaxRateId()
    {
        if (is_null($this->taxRateId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(TaxCategoryReplaceTaxRateAction::FIELD_TAX_RATE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->taxRateId = (string) $data;
        }

        return $this->taxRateId;
    }

    /**
     * @return null|TaxRateDraft
     */
    public function getTaxRate()
    {
        if (is_null($this->taxRate)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(TaxCategoryReplaceTaxRateAction::FIELD_TAX_RATE);
            if (is_null($data)) {
                return null;
            }

            $this->taxRate = TaxRateDraftModel::of($data);
        }

        return $this->taxRate;
    }

    public function setTaxRateId(?string $taxRateId): void
    {
        $this->taxRateId = $taxRateId;
    }

    public function setTaxRate(?TaxRateDraft $taxRate): void
    {
        $this->taxRate = $taxRate;
    }
}
