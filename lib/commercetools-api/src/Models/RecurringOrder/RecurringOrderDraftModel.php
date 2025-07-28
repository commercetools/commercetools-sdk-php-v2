<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\Cart\CartResourceIdentifier;
use Commercetools\Api\Models\Cart\CartResourceIdentifierModel;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifierModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class RecurringOrderDraftModel extends JsonObjectModel implements RecurringOrderDraft
{
    /**
     *
     * @var ?string
     */
    protected $key;

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
     * @var ?DateTimeImmutable
     */
    protected $startsAt;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $expiresAt;

    /**
     *
     * @var ?StateResourceIdentifier
     */
    protected $state;

    /**
     *
     * @var ?CustomFieldsDraft
     */
    protected $custom;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?CartResourceIdentifier $cart = null,
        ?int $cartVersion = null,
        ?DateTimeImmutable $startsAt = null,
        ?DateTimeImmutable $expiresAt = null,
        ?StateResourceIdentifier $state = null,
        ?CustomFieldsDraft $custom = null
    ) {
        $this->key = $key;
        $this->cart = $cart;
        $this->cartVersion = $cartVersion;
        $this->startsAt = $startsAt;
        $this->expiresAt = $expiresAt;
        $this->state = $state;
        $this->custom = $custom;
    }

    /**
     * <p>User-defined unique identifier of the <a href="ctp:api:type:RecurringOrder">RecurringOrder</a>.</p>
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
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to the Cart from which the RecurringOrder is created.</p>
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
     * <p>Current version of the referenced <a href="ctp:api:type:Cart">Cart</a>.</p>
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
     * <p>Date and time (UTC) when the RecurringOrder will start.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getStartsAt()
    {
        if (is_null($this->startsAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_STARTS_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->startsAt = $data;
        }

        return $this->startsAt;
    }

    /**
     * <p>Date and time (UTC) when the RecurringOrder will expire.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getExpiresAt()
    {
        if (is_null($this->expiresAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_EXPIRES_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->expiresAt = $data;
        }

        return $this->expiresAt;
    }

    /**
     * <p>State for the RecurringOrder in a custom workflow.</p>
     *
     *
     * @return null|StateResourceIdentifier
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->state = StateResourceIdentifierModel::of($data);
        }

        return $this->state;
    }

    /**
     * <p>Custom Fields for the RecurringOrder.</p>
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
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
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
     * @param ?DateTimeImmutable $startsAt
     */
    public function setStartsAt(?DateTimeImmutable $startsAt): void
    {
        $this->startsAt = $startsAt;
    }

    /**
     * @param ?DateTimeImmutable $expiresAt
     */
    public function setExpiresAt(?DateTimeImmutable $expiresAt): void
    {
        $this->expiresAt = $expiresAt;
    }

    /**
     * @param ?StateResourceIdentifier $state
     */
    public function setState(?StateResourceIdentifier $state): void
    {
        $this->state = $state;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[RecurringOrderDraft::FIELD_STARTS_AT]) && $data[RecurringOrderDraft::FIELD_STARTS_AT] instanceof \DateTimeImmutable) {
            $data[RecurringOrderDraft::FIELD_STARTS_AT] = $data[RecurringOrderDraft::FIELD_STARTS_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[RecurringOrderDraft::FIELD_EXPIRES_AT]) && $data[RecurringOrderDraft::FIELD_EXPIRES_AT] instanceof \DateTimeImmutable) {
            $data[RecurringOrderDraft::FIELD_EXPIRES_AT] = $data[RecurringOrderDraft::FIELD_EXPIRES_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
