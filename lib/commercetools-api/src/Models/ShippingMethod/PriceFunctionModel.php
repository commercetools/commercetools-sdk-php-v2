<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class PriceFunctionModel extends JsonObjectModel implements PriceFunction
{
    /**
     *
     * @var ?string
     */
    protected $currencyCode;

    /**
     *
     * @var ?string
     */
    protected $function;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $currencyCode = null,
        ?string $function = null
    ) {
        $this->currencyCode = $currencyCode;
        $this->function = $function;
    }

    /**
     * <p>Currency code compliant to <a href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>.</p>
     *
     *
     * @return null|string
     */
    public function getCurrencyCode()
    {
        if (is_null($this->currencyCode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CURRENCY_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->currencyCode = (string) $data;
        }

        return $this->currencyCode;
    }

    /**
     * <p>To calculate a Price based on the score, use <code>+</code>, <code>-</code>, <code>*</code> and parentheses. The score is inserted with <code>x</code>. The function returns the cent amount.</p>
     * <p>For example, to charge $1.99 for a score of <code>1</code>, $3.99 for a score of <code>2</code>, $5.99 for a score of <code>3</code> and onwards, the function is: <code>(200 * x) - 1)</code>. To charge $4.50, $6.00, and $7.50 for express shipping, the function is: <code>(150 * x) + 300</code>.</p>
     *
     *
     * @return null|string
     */
    public function getFunction()
    {
        if (is_null($this->function)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_FUNCTION);
            if (is_null($data)) {
                return null;
            }
            $this->function = (string) $data;
        }

        return $this->function;
    }


    /**
     * @param ?string $currencyCode
     */
    public function setCurrencyCode(?string $currencyCode): void
    {
        $this->currencyCode = $currencyCode;
    }

    /**
     * @param ?string $function
     */
    public function setFunction(?string $function): void
    {
        $this->function = $function;
    }
}
