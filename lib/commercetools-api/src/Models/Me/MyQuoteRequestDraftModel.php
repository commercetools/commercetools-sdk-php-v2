<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class MyQuoteRequestDraftModel extends JsonObjectModel implements MyQuoteRequestDraft
{
    /**
     *
     * @var ?string
     */
    protected $cartId;

    /**
     *
     * @var ?int
     */
    protected $cartVersion;

    /**
     *
     * @var ?string
     */
    protected $comment;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $cartId = null,
        ?int $cartVersion = null,
        ?string $comment = null
    ) {
        $this->cartId = $cartId;
        $this->cartVersion = $cartVersion;
        $this->comment = $comment;
    }

    /**
     * <p><code>id</code> of the Cart from which the Quote Request is created.</p>
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
     * <p>Current version of the Cart.</p>
     *
     *
     * @return null|int
     */
    public function getCartVersion()
    {
        if (is_null($this->cartVersion)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_CART_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->cartVersion = (int) $data;
        }

        return $this->cartVersion;
    }

    /**
     * <p>Message from the Buyer included in the Quote Request.</p>
     *
     *
     * @return null|string
     */
    public function getComment()
    {
        if (is_null($this->comment)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_COMMENT);
            if (is_null($data)) {
                return null;
            }
            $this->comment = (string) $data;
        }

        return $this->comment;
    }


    /**
     * @param ?string $cartId
     */
    public function setCartId(?string $cartId): void
    {
        $this->cartId = $cartId;
    }

    /**
     * @param ?int $cartVersion
     */
    public function setCartVersion(?int $cartVersion): void
    {
        $this->cartVersion = $cartVersion;
    }

    /**
     * @param ?string $comment
     */
    public function setComment(?string $comment): void
    {
        $this->comment = $comment;
    }
}
