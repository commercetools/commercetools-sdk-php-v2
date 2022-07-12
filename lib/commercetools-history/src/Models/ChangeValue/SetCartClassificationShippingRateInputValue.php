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

interface SetCartClassificationShippingRateInputValue extends JsonObject
{

    public const FIELD_TYPE = 'type';
    public const FIELD_KEY = 'key';
    public const FIELD_LABEL = 'label';

    /**

     * @return null|string
     */
    public function getType();

    /**

     * @return null|string
     */
    public function getKey();

    /**

     * @return null|LocalizedString
     */
    public function getLabel();

    /**
     * @param ?string $type
     */
    public function setType(?string $type): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?LocalizedString $label
     */
    public function setLabel(?LocalizedString $label): void;
}
