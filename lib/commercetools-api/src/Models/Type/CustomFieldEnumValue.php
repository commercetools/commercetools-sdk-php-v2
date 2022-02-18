<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomFieldEnumValue extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_LABEL = 'label';

    /**
     * <p>Key of the value used as a programmatic identifier.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * <p>Descriptive label of the value.</p>
     *
     * @return null|string
     */
    public function getLabel();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $label
     */
    public function setLabel(?string $label): void;
}
