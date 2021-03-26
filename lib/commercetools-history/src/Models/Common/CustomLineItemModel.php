<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CustomLineItemModel extends JsonObjectModel implements CustomLineItem
{

    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?LocalizedString
     */
    protected $name;

    /**
     * @var ?Money
     */
    protected $money;

    /**
     * @var ?TaxedItemPrice
     */
    protected $taxedPrice;

    /**
     * @var ?Money
     */
    protected $totalPrice;

    /**
     * @var ?string
     */
    protected $slug;

    /**
     * @var ?int
     */
    protected $quantity;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?LocalizedString $name = null,
        ?Money $money = null,
        ?TaxedItemPrice $taxedPrice = null,
        ?Money $totalPrice = null,
        ?string $slug = null,
        ?int $quantity = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->money = $money;
        $this->taxedPrice = $taxedPrice;
        $this->totalPrice = $totalPrice;
        $this->slug = $slug;
        $this->quantity = $quantity;

    }

    /**
     * <p>The unique ID of this CustomLineItem.</p>
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id =  (string) $data;
        }

        return $this->id;
    }

    /**
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name =  LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    /**
     * @return null|Money
     */
    public function getMoney()
    {
        if (is_null($this->money)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_MONEY);
            if (is_null($data)) {
                return null;
            }

            $this->money =  MoneyModel::of($data);
        }

        return $this->money;
    }

    /**
     * @return null|TaxedItemPrice
     */
    public function getTaxedPrice()
    {
        if (is_null($this->taxedPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TAXED_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->taxedPrice =  TaxedItemPriceModel::of($data);
        }

        return $this->taxedPrice;
    }

    /**
     * @return null|Money
     */
    public function getTotalPrice()
    {
        if (is_null($this->totalPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TOTAL_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->totalPrice =  MoneyModel::of($data);
        }

        return $this->totalPrice;
    }

    /**
     * <p>A unique String in the cart to identify this CustomLineItem.</p>
     *
     * @return null|string
     */
    public function getSlug()
    {
        if (is_null($this->slug)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SLUG);
            if (is_null($data)) {
                return null;
            }
            $this->slug =  (string) $data;
        }

        return $this->slug;
    }

    /**
     * <p>The amount of a CustomLineItem in the cart. Must be a positive integer.</p>
     *
     * @return null|int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->quantity =  (int) $data;
        }

        return $this->quantity;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?Money $money
     */
    public function setMoney(?Money $money): void
    {
        $this->money = $money;
    }

    /**
     * @param ?TaxedItemPrice $taxedPrice
     */
    public function setTaxedPrice(?TaxedItemPrice $taxedPrice): void
    {
        $this->taxedPrice = $taxedPrice;
    }

    /**
     * @param ?Money $totalPrice
     */
    public function setTotalPrice(?Money $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }

    /**
     * @param ?string $slug
     */
    public function setSlug(?string $slug): void
    {
        $this->slug = $slug;
    }

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }



}
