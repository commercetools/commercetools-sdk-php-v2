<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Cart\CartResourceIdentifier;
use Commercetools\Api\Models\Cart\CartResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyQuoteRequestDraft>
 */
final class MyQuoteRequestDraftBuilder implements Builder
{
    /**
     * @var null|CartResourceIdentifier|CartResourceIdentifierBuilder
     */
    private $cart;

    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?string
     */
    private $comment;

    /**
     * <p>ResourceIdentifier to the Cart from which this quote request is created.</p>
     *
     * @return null|CartResourceIdentifier
     */
    public function getCart()
    {
        return $this->cart instanceof CartResourceIdentifierBuilder ? $this->cart->build() : $this->cart;
    }

    /**
     * <p>Current version of the Cart.</p>
     *
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
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
     * @param ?CartResourceIdentifier $cart
     * @return $this
     */
    public function withCart(?CartResourceIdentifier $cart)
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

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
     * @deprecated use withCart() instead
     * @return $this
     */
    public function withCartBuilder(?CartResourceIdentifierBuilder $cart)
    {
        $this->cart = $cart;

        return $this;
    }

    public function build(): MyQuoteRequestDraft
    {
        return new MyQuoteRequestDraftModel(
            $this->cart instanceof CartResourceIdentifierBuilder ? $this->cart->build() : $this->cart,
            $this->version,
            $this->comment
        );
    }

    public static function of(): MyQuoteRequestDraftBuilder
    {
        return new self();
    }
}
