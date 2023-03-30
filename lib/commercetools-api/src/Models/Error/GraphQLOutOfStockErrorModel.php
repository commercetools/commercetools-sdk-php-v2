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
final class GraphQLOutOfStockErrorModel extends JsonObjectModel implements GraphQLOutOfStockError
{
    public const DISCRIMINATOR_VALUE = 'OutOfStock';
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
     * @var ?array
     */
    protected $skus;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?array $lineItems = null,
        ?array $skus = null,
        ?string $code = null
    ) {
        $this->lineItems = $lineItems;
        $this->skus = $skus;
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
     * <p>Unique identifiers of the Line Items that are out of stock.</p>
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
     * <p>SKUs of the Line Items that are out of stock.</p>
     *
     *
     * @return null|array
     */
    public function getSkus()
    {
        if (is_null($this->skus)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_SKUS);
            if (is_null($data)) {
                return null;
            }
            $this->skus = $data;
        }

        return $this->skus;
    }


    /**
     * @param ?array $lineItems
     */
    public function setLineItems(?array $lineItems): void
    {
        $this->lineItems = $lineItems;
    }

    /**
     * @param ?array $skus
     */
    public function setSkus(?array $skus): void
    {
        $this->skus = $skus;
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
