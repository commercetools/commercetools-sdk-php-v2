<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface TextLineItemDraft extends JsonObject
{
    const FIELD_ADDED_AT = 'addedAt';
    const FIELD_CUSTOM = 'custom';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_NAME = 'name';
    const FIELD_QUANTITY = 'quantity';

    /**
     * <p>Defaults to the current date and time.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getAddedAt();

    /**
     * <p>The custom fields.</p>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Defaults to <code>1</code>.</p>
     *
     * @return null|int
     */
    public function getQuantity();

    public function setAddedAt(?DateTimeImmutable $addedAt): void;

    public function setCustom(?CustomFieldsDraft $custom): void;

    public function setDescription(?LocalizedString $description): void;

    public function setName(?LocalizedString $name): void;

    public function setQuantity(?int $quantity): void;
}
