<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\LocalizedString;

interface SetOrderLineItemCustomFieldChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_CUSTOM_TYPE_ID = 'customTypeId';
    public const FIELD_NAME = 'name';
    public const FIELD_LINE_ITEM = 'lineItem';
    public const FIELD_VARIANT = 'variant';

    /**

     * @return null|string
     */
    public function getType();

    /**

     * @return null|string
     */
    public function getChange();

    /**
     * <p>Value before the change.</p>
     *

     * @return null|mixed
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|mixed
     */
    public function getNextValue();

    /**
     * <p><code>id</code> of the referenced <a href="ctp:api:type:Type">Type</a>.</p>
     *

     * @return null|string
     */
    public function getCustomTypeId();

    /**
     * <p>Name of the <a href="/../api/projects/custom-fields">Custom Field</a>.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p>Name of the <a href="ctp:api:type:Product">Product</a> the Line Item is based on.</p>
     *

     * @return null|LocalizedString
     */
    public function getLineItem();

    /**
     * <p><code>sku</code> or <code>key</code> of the <a href="ctp:api:type:ProductVariant">ProductVariant</a>.</p>
     *

     * @return null|string
     */
    public function getVariant();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param mixed $previousValue
     */
    public function setPreviousValue( $previousValue): void;

    /**
     * @param mixed $nextValue
     */
    public function setNextValue( $nextValue): void;

    /**
     * @param ?string $customTypeId
     */
    public function setCustomTypeId(?string $customTypeId): void;

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?LocalizedString $lineItem
     */
    public function setLineItem(?LocalizedString $lineItem): void;

    /**
     * @param ?string $variant
     */
    public function setVariant(?string $variant): void;
}
