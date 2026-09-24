<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\Warning\WarningObject;
use Commercetools\Api\Models\Warning\WarningObjectModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AgentProductsNotFoundWarningModel extends JsonObjectModel implements AgentProductsNotFoundWarning
{
    public const DISCRIMINATOR_VALUE = 'ProductsNotFound';
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
     * @var ?array
     */
    protected $products;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $message = null,
        ?array $products = null,
        ?string $code = null
    ) {
        $this->message = $message;
        $this->products = $products;
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
     * <p>Plain text description of the unmatched Products.</p>
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
     * <p>Identifiers of the Products that could not be matched to the catalog, as they appeared in the input.</p>
     *
     *
     * @return null|array
     */
    public function getProducts()
    {
        if (is_null($this->products)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_PRODUCTS);
            if (is_null($data)) {
                return null;
            }
            $this->products = $data;
        }

        return $this->products;
    }


    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @param ?array $products
     */
    public function setProducts(?array $products): void
    {
        $this->products = $products;
    }
}
