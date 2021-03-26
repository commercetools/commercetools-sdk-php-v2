<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface SetCustomFieldChange extends Change
{

    public const FIELD_NAME = 'name';
    public const FIELD_CUSTOM_TYPE_ID = 'customTypeId';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**
     * <p>Update action for setting a custom field</p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Custom field name</p>
     *
     * @return null|string
     */
    public function getName();

    /**
     * @return null|string
     */
    public function getCustomTypeId();

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
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?string $customTypeId
     */
    public function setCustomTypeId(?string $customTypeId): void;

    /**
     * @param mixed $nextValue
     */
    public function setNextValue( $nextValue): void;

    /**
     * @param mixed $previousValue
     */
    public function setPreviousValue( $previousValue): void;
}
