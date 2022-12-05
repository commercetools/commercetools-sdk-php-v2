<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface MyShoppingListAddTextLineItemAction extends MyShoppingListUpdateAction
{
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_ADDED_AT = 'addedAt';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>Name of the <a href="ctp:api:type:TextLineItem">TextLineItem</a>.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Description of the TextLineItem.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>Number of entries in the TextLineItem.</p>
     *

     * @return null|int
     */
    public function getQuantity();

    /**
     * <p>Date and time the TextLineItem is added to the <a href="ctp:api:type:ShoppingList">ShoppingList</a>. If not set, the current date and time (UTC) is used.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getAddedAt();

    /**
     * <p>Custom Fields defined for the TextLineItem.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;

    /**
     * @param ?DateTimeImmutable $addedAt
     */
    public function setAddedAt(?DateTimeImmutable $addedAt): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;
}
