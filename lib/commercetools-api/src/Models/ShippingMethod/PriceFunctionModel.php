<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\JsonObjectModel;

final class PriceFunctionModel extends JsonObjectModel implements PriceFunction
{
    /**
     * @var ?string
     */
    protected $function;

    /**
     * @var ?string
     */
    protected $currencyCode;

    public function __construct(
        string $function = null,
        string $currencyCode = null
    ) {
        $this->function = $function;
        $this->currencyCode = $currencyCode;
    }

    /**
     * @return null|string
     */
    public function getFunction()
    {
        if (is_null($this->function)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PriceFunction::FIELD_FUNCTION);
            if (is_null($data)) {
                return null;
            }
            $this->function = (string) $data;
        }

        return $this->function;
    }

    /**
     * <p>The currency code compliant to <a href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>.</p>.
     *
     * @return null|string
     */
    public function getCurrencyCode()
    {
        if (is_null($this->currencyCode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PriceFunction::FIELD_CURRENCY_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->currencyCode = (string) $data;
        }

        return $this->currencyCode;
    }

    public function setFunction(?string $function): void
    {
        $this->function = $function;
    }

    public function setCurrencyCode(?string $currencyCode): void
    {
        $this->currencyCode = $currencyCode;
    }
}
