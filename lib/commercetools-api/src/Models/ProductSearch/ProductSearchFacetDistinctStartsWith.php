<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchFacetDistinctStartsWith extends JsonObject
{
    public const FIELD_VALUE = 'value';
    public const FIELD_CASE_INSENSITIVE = 'caseInsensitive';

    /**
     * <p>Text to match against the start of the target value.</p>
     *

     * @return null|string
     */
    public function getValue();

    /**
     * <p>If <code>true</code>, the <code>value</code> is not case sensitive.</p>
     *

     * @return null|bool
     */
    public function getCaseInsensitive();

    /**
     * @param ?string $value
     */
    public function setValue(?string $value): void;

    /**
     * @param ?bool $caseInsensitive
     */
    public function setCaseInsensitive(?bool $caseInsensitive): void;
}
