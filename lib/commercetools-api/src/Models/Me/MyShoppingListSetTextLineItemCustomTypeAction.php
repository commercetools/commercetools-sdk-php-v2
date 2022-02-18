<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Type\FieldContainer;
use Commercetools\Api\Models\Type\TypeResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyShoppingListSetTextLineItemCustomTypeAction extends MyShoppingListUpdateAction
{
    public const FIELD_TEXT_LINE_ITEM_ID = 'textLineItemId';
    public const FIELD_TYPE = 'type';
    public const FIELD_FIELDS = 'fields';

    /**
     * @return null|string
     */
    public function getTextLineItemId();

    /**
     * <p><a href="/../api/types#resourceidentifier">ResourceIdentifier</a> of a <a href="ctp:api:type:Type">Type</a>.</p>
     *
     * @return null|TypeResourceIdentifier
     */
    public function getType();

    /**
     * @return null|FieldContainer
     */
    public function getFields();

    /**
     * @param ?string $textLineItemId
     */
    public function setTextLineItemId(?string $textLineItemId): void;

    /**
     * @param ?TypeResourceIdentifier $type
     */
    public function setType(?TypeResourceIdentifier $type): void;

    /**
     * @param ?FieldContainer $fields
     */
    public function setFields(?FieldContainer $fields): void;
}
