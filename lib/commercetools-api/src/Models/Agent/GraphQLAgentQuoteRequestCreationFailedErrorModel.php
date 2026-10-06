<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\Error\GraphQLErrorObject;
use Commercetools\Api\Models\Error\GraphQLErrorObjectModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class GraphQLAgentQuoteRequestCreationFailedErrorModel extends JsonObjectModel implements GraphQLAgentQuoteRequestCreationFailedError
{
    public const DISCRIMINATOR_VALUE = 'QuoteRequestCreationFailed';
    /**
     *
     * @var ?string
     */
    protected $code;

    /**
     *
     * @var ?string
     */
    protected $cartId;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $cartId = null,
        ?string $code = null
    ) {
        $this->cartId = $cartId;
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
     * <p><code>id</code> of the orphaned Cart, for retry or cleanup.</p>
     *
     *
     * @return null|string
     */
    public function getCartId()
    {
        if (is_null($this->cartId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CART_ID);
            if (is_null($data)) {
                return null;
            }
            $this->cartId = (string) $data;
        }

        return $this->cartId;
    }


    /**
     * @param ?string $cartId
     */
    public function setCartId(?string $cartId): void
    {
        $this->cartId = $cartId;
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
