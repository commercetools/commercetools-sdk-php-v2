<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\Cart\CartResourceIdentifier;
use Commercetools\Api\Models\Cart\CartResourceIdentifierBuilder;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifierBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<RecurringOrderDraft>
 */
final class RecurringOrderDraftBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**

     * @var null|CartResourceIdentifier|CartResourceIdentifierBuilder
     */
    private $cart;

    /**

     * @var ?int
     */
    private $cartVersion;

    /**

     * @var ?DateTimeImmutable
     */
    private $startsAt;

    /**

     * @var ?DateTimeImmutable
     */
    private $expiresAt;

    /**

     * @var null|StateResourceIdentifier|StateResourceIdentifierBuilder
     */
    private $state;

    /**

     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
     */
    private $custom;

    /**
     * <p>User-defined unique identifier of the <a href="ctp:api:type:RecurringOrder">RecurringOrder</a>.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to the Cart from which the RecurringOrder is created.</p>
     *

     * @return null|CartResourceIdentifier
     */
    public function getCart()
    {
        return $this->cart instanceof CartResourceIdentifierBuilder ? $this->cart->build() : $this->cart;
    }

    /**
     * <p>Current version of the referenced <a href="ctp:api:type:Cart">Cart</a>.</p>
     *

     * @return null|int
     */
    public function getCartVersion()
    {
        return $this->cartVersion;
    }

    /**
     * <p>Date and time (UTC) when the RecurringOrder will start. When specified, the date and time must be in the future. If not specified, the recurring order will start immediately.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getStartsAt()
    {
        return $this->startsAt;
    }

    /**
     * <p>Date and time (UTC) when the RecurringOrder will expire.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * <p>State for the RecurringOrder in a custom workflow.</p>
     *

     * @return null|StateResourceIdentifier
     */
    public function getState()
    {
        return $this->state instanceof StateResourceIdentifierBuilder ? $this->state->build() : $this->state;
    }

    /**
     * <p>Custom Fields for the RecurringOrder.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
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
     * @param ?DateTimeImmutable $startsAt
     * @return $this
     */
    public function withStartsAt(?DateTimeImmutable $startsAt)
    {
        $this->startsAt = $startsAt;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $expiresAt
     * @return $this
     */
    public function withExpiresAt(?DateTimeImmutable $expiresAt)
    {
        $this->expiresAt = $expiresAt;

        return $this;
    }

    /**
     * @param ?StateResourceIdentifier $state
     * @return $this
     */
    public function withState(?StateResourceIdentifier $state)
    {
        $this->state = $state;

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
     * @deprecated use withState() instead
     * @return $this
     */
    public function withStateBuilder(?StateResourceIdentifierBuilder $state)
    {
        $this->state = $state;

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

    public function build(): RecurringOrderDraft
    {
        return new RecurringOrderDraftModel(
            $this->key,
            $this->cart instanceof CartResourceIdentifierBuilder ? $this->cart->build() : $this->cart,
            $this->cartVersion,
            $this->startsAt,
            $this->expiresAt,
            $this->state instanceof StateResourceIdentifierBuilder ? $this->state->build() : $this->state,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): RecurringOrderDraftBuilder
    {
        return new self();
    }
}
