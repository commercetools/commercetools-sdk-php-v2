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

interface LocalizedEnumValue extends JsonObject
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
     * <p>Descriptive localized label of the value.</p>
     *

     * @return null|LocalizedString
     */
    public function getLabel();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?LocalizedString $label
     */
    public function setLabel(?LocalizedString $label): void;
}
