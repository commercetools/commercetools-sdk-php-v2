<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface TextLineItem extends JsonObject
{
    const FIELD_ADDED_AT = 'addedAt';
    const FIELD_CUSTOM = 'custom';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_ID = 'id';
    const FIELD_NAME = 'name';
    const FIELD_QUANTITY = 'quantity';

    /**
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

    public function setAddedAt(?DateTimeImmutable $addedAt): void;

    public function setCustom(?CustomFields $custom): void;

    public function setDescription(?LocalizedString $description): void;

    public function setId(?string $id): void;

    public function setName(?LocalizedString $name): void;

    public function setQuantity(?int $quantity): void;
}
