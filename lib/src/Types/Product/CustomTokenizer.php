<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

interface CustomTokenizer extends SuggestTokenizer
{
    const FIELD_INPUTS = 'inputs';

    /**
     * @return array
     */
    public function getInputs();

    /**
     * @param array $inputs
     * @return $this
     */
    public function setInputs($inputs);

}
