<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomTokenizer extends SuggestTokenizer
{
    public const FIELD_INPUTS = 'inputs';

    /**

     * @return null|array
     */
    public function getInputs();

    /**
     * @param ?array $inputs
     */
    public function setInputs(?array $inputs): void;
}
