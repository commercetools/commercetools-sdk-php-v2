<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

interface CustomTokenizer extends SuggestTokenizer
{
    const FIELD_INPUTS = 'inputs';

    /**
     * @return null|array
     */
    public function getInputs();

    public function setInputs(?array $inputs): void;
}
