<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Products;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;

interface CustomTokenizer extends SuggestTokenizer
{

    public const FIELD_INPUTS = 'inputs';

    /**
     * @return null|array
     */
    public function getInputs();

    public function setInputs(?array $inputs): void;
}
