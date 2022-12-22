<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Common\Price;
use Commercetools\Api\Models\Common\PriceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class DuplicatePriceScopeErrorModel extends JsonObjectModel implements DuplicatePriceScopeError
{
    public const DISCRIMINATOR_VALUE = 'DuplicatePriceScope';
    /**
     *
     * @var ?string
     */
    protected $code;

    /**
     *
     * @var ?string
     */
    protected $message;

    /**
     *
     * @var ?Price
     */
    protected $conflictingPrice;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $message = null,
        ?Price $conflictingPrice = null,
        ?string $code = null
    ) {
        $this->message = $message;
        $this->conflictingPrice = $conflictingPrice;
        $this->code = $code ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->code = (string) $data;
        }

        return $this->code;
    }

    /**
     * <p><code>&quot;Duplicate price scope: $priceScope. The combination of currency, country, customerGroup and channel must be unique for each price of a product variant.&quot;</code></p>
     *
     *
     * @return null|string
     */
    public function getMessage()
    {
        if (is_null($this->message)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_MESSAGE);
            if (is_null($data)) {
                return null;
            }
            $this->message = (string) $data;
        }

        return $this->message;
    }

    /**
     * <p>Conflicting Embedded Price.</p>
     *
     *
     * @return null|Price
     */
    public function getConflictingPrice()
    {
        if (is_null($this->conflictingPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CONFLICTING_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->conflictingPrice = PriceModel::of($data);
        }

        return $this->conflictingPrice;
    }


    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @param ?Price $conflictingPrice
     */
    public function setConflictingPrice(?Price $conflictingPrice): void
    {
        $this->conflictingPrice = $conflictingPrice;
    }

    /**
     * @return mixed
     */
    public function by(string $key)
    {
        $data = $this->raw($key);
        if (is_null($data)) {
            return null;
        }

        return $data;
    }
}
