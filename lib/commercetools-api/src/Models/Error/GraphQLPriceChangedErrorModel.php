<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class GraphQLPriceChangedErrorModel extends JsonObjectModel implements GraphQLPriceChangedError
{
    public const DISCRIMINATOR_VALUE = 'PriceChanged';
    /**
     *
     * @var ?string
     */
    protected $code;

    /**
     *
     * @var ?array
     */
    protected $lineItems;

    /**
     *
     * @var ?bool
     */
    protected $shipping;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?array $lineItems = null,
        ?bool $shipping = null,
        ?string $code = null
    ) {
        $this->lineItems = $lineItems;
        $this->shipping = $shipping;
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
     * <p>Unique identifiers of the Line Items for which the Price or <a href="ctp:api:type:TaxRate">TaxRate</a> has changed.</p>
     *
     *
     * @return null|array
     */
    public function getLineItems()
    {
        if (is_null($this->lineItems)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_LINE_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->lineItems = $data;
        }

        return $this->lineItems;
    }

    /**
     * <p><code>true</code> if the <a href="ctp:api:type:ShippingRate">ShippingRate</a> has changed.</p>
     *
     *
     * @return null|bool
     */
    public function getShipping()
    {
        if (is_null($this->shipping)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_SHIPPING);
            if (is_null($data)) {
                return null;
            }
            $this->shipping = (bool) $data;
        }

        return $this->shipping;
    }


    /**
     * @param ?array $lineItems
     */
    public function setLineItems(?array $lineItems): void
    {
        $this->lineItems = $lineItems;
    }

    /**
     * @param ?bool $shipping
     */
    public function setShipping(?bool $shipping): void
    {
        $this->shipping = $shipping;
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
