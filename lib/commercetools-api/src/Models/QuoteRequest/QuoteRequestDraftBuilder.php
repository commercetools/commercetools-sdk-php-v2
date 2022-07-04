<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\QuoteRequest;

use Commercetools\Api\Models\Cart\CartResourceIdentifier;
use Commercetools\Api\Models\Cart\CartResourceIdentifierBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<QuoteRequestDraft>
 */
final class QuoteRequestDraftBuilder implements Builder
{
    /**
     * @var null|CartResourceIdentifier|CartResourceIdentifierBuilder
     */
    private $cart;

    /**
     * @var ?int
     */
    private $cartVersion;

    /**
     * @var ?string
     */
    private $key;

    /**
     * @var ?string
     */
    private $comment;

    /**
     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
     */
    private $custom;

    /**
     * <p>Cart for which a Quote is requested. Anonymous Carts as well as Carts with <a href="/../api?projects/discount-codes">Discount Codes</a> are not supported.</p>
     *
     * @return null|CartResourceIdentifier
     */
    public function getCart()
    {
        return $this->cart instanceof CartResourceIdentifierBuilder ? $this->cart->build() : $this->cart;
    }

    /**
     * <p>Current version of the referenced Cart.</p>
     *
     * @return null|int
     */
    public function getCartVersion()
    {
        return $this->cartVersion;
    }

    /**
     * <p>User-defined unique identifier for the QuoteRequest.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Text message included in the request.</p>
     *
     * @return null|string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * <p>Custom Fields to be added to the Quote Request.</p>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @param ?CartResourceIdentifier $cart
     * @return $this
     */
    public function withCart(?CartResourceIdentifier $cart)
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * @param ?int $cartVersion
     * @return $this
     */
    public function withCartVersion(?int $cartVersion)
    {
        $this->cartVersion = $cartVersion;

        return $this;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?string $comment
     * @return $this
     */
    public function withComment(?string $comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     * @return $this
     */
    public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @deprecated use withCart() instead
     * @return $this
     */
    public function withCartBuilder(?CartResourceIdentifierBuilder $cart)
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): QuoteRequestDraft
    {
        return new QuoteRequestDraftModel(
            $this->cart instanceof CartResourceIdentifierBuilder ? $this->cart->build() : $this->cart,
            $this->cartVersion,
            $this->key,
            $this->comment,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): QuoteRequestDraftBuilder
    {
        return new self();
    }
}
