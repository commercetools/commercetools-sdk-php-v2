<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface TextLineItem extends JsonObject
{
    public const FIELD_ADDED_AT = 'addedAt';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_ID = 'id';
    public const FIELD_NAME = 'name';
    public const FIELD_QUANTITY = 'quantity';

    /**
     * <p>When the text line item was added to the shopping list.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getAddedAt();

    /**
     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>The unique ID of this TextLineItem.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * @return null|int
     */
    public function getQuantity();

    /**
     * @param ?DateTimeImmutable $addedAt
     */
    public function setAddedAt(?DateTimeImmutable $addedAt): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;
}
