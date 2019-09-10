<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;

interface CustomTokenizer extends SuggestTokenizer
{
    
    const FIELD_INPUTS = 'inputs';

    /**
     *
     * @return array|null
     */
    public function getInputs();
    public function setInputs(?array $inputs): void;
}