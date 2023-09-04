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
    public const FIELD_TEXT_LINE_ITEM_KEY = 'textLineItemKey';
    public const FIELD_TYPE = 'type';
    public const FIELD_FIELDS = 'fields';

    /**
     * <p>The <code>id</code> of the <a href="ctp:api:type:TextLineItem">TextLineItem</a> to update. Either <code>lineItemId</code> or <code>lineItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getTextLineItemId();

    /**
     * <p>The <code>key</code> of the <a href="ctp:api:type:TextLineItem">TextLineItem</a> to update. Either <code>lineItemId</code> or <code>lineItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getTextLineItemKey();

    /**
     * <p>Defines the <a href="ctp:api:type:Type">Type</a> that extends the TextLineItem with <a href="/../api/projects/custom-fields">Custom Fields</a>.
     * If absent, any existing Type and Custom Fields are removed from the TextLineItem.</p>
     *

     * @return null|TypeResourceIdentifier
     */
    public function getType();

    /**
     * <p>Sets the <a href="/../api/projects/custom-fields">Custom Fields</a> fields for the TextLineItem.</p>
     *

     * @return null|FieldContainer
     */
    public function getFields();

    /**
     * @param ?string $textLineItemId
     */
    public function setTextLineItemId(?string $textLineItemId): void;

    /**
     * @param ?string $textLineItemKey
     */
    public function setTextLineItemKey(?string $textLineItemKey): void;

    /**
     * @param ?TypeResourceIdentifier $type
     */
    public function setType(?TypeResourceIdentifier $type): void;

    /**
     * @param ?FieldContainer $fields
     */
    public function setFields(?FieldContainer $fields): void;
}
