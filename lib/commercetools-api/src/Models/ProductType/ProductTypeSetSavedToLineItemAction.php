<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductTypeSetSavedToLineItemAction extends ProductTypeUpdateAction
{
    public const FIELD_ATTRIBUTE_NAME = 'attributeName';
    public const FIELD_SAVED_TO_LINE_ITEM = 'savedToLineItem';

    /**
     * <p>Name of the AttributeDefinition to update.</p>
     *

     * @return null|string
     */
    public function getAttributeName();

    /**
     * <p>Whether the Attribute value is copied onto a <a href="ctp:api:type:LineItem">LineItem</a> when the Product is added to a Cart.
     * See <a href="ctp:api:type:AttributeDefinition">AttributeDefinition</a> for details.</p>
     * <p>It has no effect if the Attribute already has the given value.</p>
     *

     * @return null|bool
     */
    public function getSavedToLineItem();

    /**
     * @param ?string $attributeName
     */
    public function setAttributeName(?string $attributeName): void;

    /**
     * @param ?bool $savedToLineItem
     */
    public function setSavedToLineItem(?bool $savedToLineItem): void;
}
