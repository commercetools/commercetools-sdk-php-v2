<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ValidFromAndUntilValue extends JsonObject
{

    public const FIELD_VALID_FROM = 'validFrom';
    public const FIELD_VALID_UNTIL = 'validUntil';

    /**

     * @return null|string
     */
    public function getValidFrom();

    /**

     * @return null|string
     */
    public function getValidUntil();

    /**
     * @param ?string $validFrom
     */
    public function setValidFrom(?string $validFrom): void;

    /**
     * @param ?string $validUntil
     */
    public function setValidUntil(?string $validUntil): void;
}
