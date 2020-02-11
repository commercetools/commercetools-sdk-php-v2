<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use DateTimeImmutable;

interface ShoppingListAddTextLineItemAction extends ShoppingListUpdateAction
{

    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_ADDED_AT = 'addedAt';
    public const FIELD_CUSTOM = 'custom';

    /**
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * @return null|int
     */
    public function getQuantity();

    /**
     * @return null|DateTimeImmutable
     */
    public function getAddedAt();

    /**
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    public function setName(?LocalizedString $name): void;

    public function setDescription(?LocalizedString $description): void;

    public function setQuantity(?int $quantity): void;

    public function setAddedAt(?DateTimeImmutable $addedAt): void;

    public function setCustom(?CustomFieldsDraft $custom): void;
}
