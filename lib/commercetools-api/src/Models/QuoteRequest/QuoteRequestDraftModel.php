<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\QuoteRequest;

use Commercetools\Api\Models\Cart\CartResourceIdentifier;
use Commercetools\Api\Models\Cart\CartResourceIdentifierModel;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class QuoteRequestDraftModel extends JsonObjectModel implements QuoteRequestDraft
{
    /**
     *
     * @var ?CartResourceIdentifier
     */
    protected $cart;

    /**
     *
     * @var ?int
     */
    protected $cartVersion;

    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?string
     */
    protected $comment;

    /**
     *
     * @var ?CustomFieldsDraft
     */
    protected $custom;

    /**
     *
     * @var ?StateReference
     */
    protected $state;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CartResourceIdentifier $cart = null,
        ?int $cartVersion = null,
        ?string $key = null,
        ?string $comment = null,
        ?CustomFieldsDraft $custom = null,
        ?StateReference $state = null
    ) {
        $this->cart = $cart;
        $this->cartVersion = $cartVersion;
        $this->key = $key;
        $this->comment = $comment;
        $this->custom = $custom;
        $this->state = $state;
    }

    /**
     * <p>Cart for which a Quote is requested. Anonymous Carts as well as Carts with <a href="/../api?projects/discount-codes">Discount Codes</a> are not supported.</p>
     *
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
     * <p>Current version of the referenced Cart.</p>
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
     * <p>User-defined unique identifier for the QuoteRequest.</p>
     *
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
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
     * <p>Custom Fields to be added to the Quote Request.</p>
     *
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }

    /**
     * <p><a href="ctp:api:type:State">State</a> of this Quote Request.
     * This reference can point to a State in a custom workflow.</p>
     *
     *
     * @return null|StateReference
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->state = StateReferenceModel::of($data);
        }

        return $this->state;
    }


    /**
     * @param ?CartResourceIdentifier $cart
     */
    public function setCart(?CartResourceIdentifier $cart): void
    {
        $this->cart = $cart;
    }

    /**
     * @param ?int $cartVersion
     */
    public function setCartVersion(?int $cartVersion): void
    {
        $this->cartVersion = $cartVersion;
    }

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?string $comment
     */
    public function setComment(?string $comment): void
    {
        $this->comment = $comment;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }

    /**
     * @param ?StateReference $state
     */
    public function setState(?StateReference $state): void
    {
        $this->state = $state;
    }
}
