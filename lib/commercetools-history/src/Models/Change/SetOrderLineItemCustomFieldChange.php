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

    public const FIELD_CUSTOM_TYPE_ID = 'customTypeId';
    public const FIELD_NAME = 'name';
    public const FIELD_VARIANT = 'variant';
    public const FIELD_LINE_ITEM = 'lineItem';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>setLineItemCustomField</code></p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|string
     */
    public function getCustomTypeId();

    /**
     * @return null|string
     */
    public function getName();

    /**
     * @return null|string
     */
    public function getVariant();

    /**
     * @return null|LocalizedString
     */
    public function getLineItem();

    /**
     * @return null|mixed
     */
    public function getNextValue();

    /**
     * @return null|mixed
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?string $customTypeId
     */
    public function setCustomTypeId(?string $customTypeId): void;

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?string $variant
     */
    public function setVariant(?string $variant): void;

    /**
     * @param ?LocalizedString $lineItem
     */
    public function setLineItem(?LocalizedString $lineItem): void;

    /**
     * @param mixed $nextValue
     */
    public function setNextValue( $nextValue): void;

    /**
     * @param mixed $previousValue
     */
    public function setPreviousValue( $previousValue): void;
}
