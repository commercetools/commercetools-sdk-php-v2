<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderSearchFullTextValue extends OrderSearchQueryExpressionValue
{
    public const FIELD_VALUE = 'value';
    public const FIELD_LANGUAGE = 'language';
    public const FIELD_MUST_MATCH = 'mustMatch';

    /**

     * @return null|string
     */
    public function getValue();

    /**

     * @return null|string
     */
    public function getLanguage();

    /**

     * @return null|string
     */
    public function getMustMatch();

    /**
     * @param ?string $value
     */
    public function setValue(?string $value): void;

    /**
     * @param ?string $language
     */
    public function setLanguage(?string $language): void;

    /**
     * @param ?string $mustMatch
     */
    public function setMustMatch(?string $mustMatch): void;
}
