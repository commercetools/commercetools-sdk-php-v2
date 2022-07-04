<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Cart\CartResourceIdentifier;
use Commercetools\Api\Models\Cart\CartResourceIdentifierModel;
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
     * @var ?CartResourceIdentifier
     */
    protected $cart;

    /**
     * @var ?int
     */
    protected $version;

    /**
     * @var ?string
     */
    protected $comment;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CartResourceIdentifier $cart = null,
        ?int $version = null,
        ?string $comment = null
    ) {
        $this->cart = $cart;
        $this->version = $version;
        $this->comment = $comment;
    }

    /**
     * <p>ResourceIdentifier to the Cart from which this quote request is created.</p>
     *
     * @return null|CartResourceIdentifier
     */
    public function getCart()
    {
        if (is_null($this->cart)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CART);
            if (is_null($data)) {
                return null;
            }

            $this->cart = CartResourceIdentifierModel::of($data);
        }

        return $this->cart;
    }

    /**
     * <p>Current version of the Cart.</p>
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * <p>Text message included in the request.</p>
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
     * @param ?CartResourceIdentifier $cart
     */
    public function setCart(?CartResourceIdentifier $cart): void
    {
        $this->cart = $cart;
    }

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * @param ?string $comment
     */
    public function setComment(?string $comment): void
    {
        $this->comment = $comment;
    }
}
