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
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $taxRateId;

    /**
     *
     * @var ?string
     */
    protected $taxRateKey;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $taxRateId = null,
        ?string $taxRateKey = null,
        ?string $action = null
    ) {
        $this->taxRateId = $taxRateId;
        $this->taxRateKey = $taxRateKey;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
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
     * <p>ID of the TaxRate to remove.
     * Either <code>taxRateId</code> or <code>taxRateKey</code> is required for this update action.</p>
     *
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
     * <p>Key of the TaxRate to remove.
     * Either <code>taxRateId</code> or <code>taxRateKey</code> is required for this update action.</p>
     *
     *
     * @return null|string
     */
    public function getTaxRateKey()
    {
        if (is_null($this->taxRateKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TAX_RATE_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->taxRateKey = (string) $data;
        }

        return $this->taxRateKey;
    }


    /**
     * @param ?string $taxRateId
     */
    public function setTaxRateId(?string $taxRateId): void
    {
        $this->taxRateId = $taxRateId;
    }

    /**
     * @param ?string $taxRateKey
     */
    public function setTaxRateKey(?string $taxRateKey): void
    {
        $this->taxRateKey = $taxRateKey;
    }
}
