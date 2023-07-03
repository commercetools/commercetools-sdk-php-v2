<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\LocalizedString;

interface ShoppingListLineItemValue extends JsonObject
{

    public const FIELD_ID = 'id';
    public const FIELD_NAME = 'name';
    public const FIELD_VARIANT_ID = 'variantId';

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:ShoppingListLineItem">ShoppingListLineItem</a>.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Name of the corresponding Product the Product Variant belongs to.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:ProductVariant">ProductVariant</a> the ShoppingListLineItem refers to.</p>
     *

     * @return null|int
     */
    public function getVariantId();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void;
}
