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

/**
 * @internal
 */
final class TaxCategoryRemoveTaxRateActionModel extends JsonObjectModel implements TaxCategoryRemoveTaxRateAction
{
    public const DISCRIMINATOR_VALUE = 'removeTaxRate';
    /**

     * @var ?string
     */
    protected $action;

    /**

     * @var ?string
     */
    protected $taxRateId;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $taxRateId = null
    ) {
        $this->taxRateId = $taxRateId;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**

     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>ID of the TaxRate to remove.</p>
     *

     * @return null|string
     */
    public function getTaxRateId()
    {
        if (is_null($this->taxRateId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TAX_RATE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->taxRateId = (string) $data;
        }

        return $this->taxRateId;
    }


    /**
     * @param ?string $taxRateId
     */
    public function setTaxRateId(?string $taxRateId): void
    {
        $this->taxRateId = $taxRateId;
    }
}
