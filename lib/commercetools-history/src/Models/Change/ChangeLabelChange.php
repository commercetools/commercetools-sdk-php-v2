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

interface ChangeLabelChange extends Change
{

    public const FIELD_FIELD_NAME = 'fieldName';
    public const FIELD_ATTRIBUTE_NAME = 'attributeName';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>changeLabel</code> on product types and types</p>
     *

     * @return null|string
     */
    public function getChange();

    /**
     * <p>The name of the field definition to update (types).</p>
     *

     * @return null|string
     */
    public function getFieldName();

    /**
     * <p>The name of the attribute definition to update (product-type).</p>
     *

     * @return null|string
     */
    public function getAttributeName();

    /**

     * @return null|LocalizedString
     */
    public function getNextValue();

    /**

     * @return null|LocalizedString
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?string $fieldName
     */
    public function setFieldName(?string $fieldName): void;

    /**
     * @param ?string $attributeName
     */
    public function setAttributeName(?string $attributeName): void;

    /**
     * @param ?LocalizedString $nextValue
     */
    public function setNextValue(?LocalizedString $nextValue): void;

    /**
     * @param ?LocalizedString $previousValue
     */
    public function setPreviousValue(?LocalizedString $previousValue): void;
}
