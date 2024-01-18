<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchSuggestionCompletionExpressionValue extends ProductSearchSuggestionExpressionValue
{
    public const FIELD_NAME = 'name';
    public const FIELD_FIELD = 'field';
    public const FIELD_PREFIX = 'prefix';

    /**

     * @return null|string
     */
    public function getName();

    /**

     * @return null|string
     */
    public function getField();

    /**

     * @return null|string
     */
    public function getPrefix();

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?string $field
     */
    public function setField(?string $field): void;

    /**
     * @param ?string $prefix
     */
    public function setPrefix(?string $prefix): void;
}
