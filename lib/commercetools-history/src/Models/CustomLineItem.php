<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface CustomLineItem extends JsonObject
{

    public const FIELD_ID = 'id';
    public const FIELD_NAME = 'name';
    public const FIELD_MONEY = 'money';
    public const FIELD_TAXED_PRICE = 'taxedPrice';
    public const FIELD_TOTAL_PRICE = 'totalPrice';
    public const FIELD_SLUG = 'slug';
    public const FIELD_QUANTITY = 'quantity';

    /**
     * <p>The unique ID of this CustomLineItem.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * @return null|Money
     */
    public function getMoney();

    /**
     * @return null|TaxedItemPrice
     */
    public function getTaxedPrice();

    /**
     * @return null|Money
     */
    public function getTotalPrice();

    /**
     * <p>A unique String in the cart to identify this CustomLineItem.</p>
     *
     * @return null|string
     */
    public function getSlug();

    /**
     * <p>The amount of a CustomLineItem in the cart. Must be a positive integer.</p>
     *
     * @return null|int
     */
    public function getQuantity();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?Money $money
     */
    public function setMoney(?Money $money): void;

    /**
     * @param ?TaxedItemPrice $taxedPrice
     */
    public function setTaxedPrice(?TaxedItemPrice $taxedPrice): void;

    /**
     * @param ?Money $totalPrice
     */
    public function setTotalPrice(?Money $totalPrice): void;

    /**
     * @param ?string $slug
     */
    public function setSlug(?string $slug): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;
}
