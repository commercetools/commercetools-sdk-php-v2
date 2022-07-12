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

interface CustomFieldExpandedValue extends JsonObject
{

    public const FIELD_NAME = 'name';
    public const FIELD_VALUE = 'value';
    public const FIELD_LABEL = 'label';

    /**
     * <p>Name of a custom field.</p>
     *

     * @return null|string
     */
    public function getName();

    /**

     * @return null|mixed
     */
    public function getValue();

    /**

     * @return null|LocalizedString
     */
    public function getLabel();

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param mixed $value
     */
    public function setValue( $value): void;

    /**
     * @param ?LocalizedString $label
     */
    public function setLabel(?LocalizedString $label): void;
}
