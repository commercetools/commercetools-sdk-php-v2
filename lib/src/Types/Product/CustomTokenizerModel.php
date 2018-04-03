<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Product\SuggestTokenizerModel;

class CustomTokenizerModel extends SuggestTokenizerModel implements CustomTokenizer {
    const DISCRIMINATOR_VALUE = 'custom';

    /**
     * @var array
     */
    protected $inputs;

    /**
     * @return array
     */
    public function getInputs()
    {
        if (is_null($this->inputs)) {
            $value = $this->raw(CustomTokenizer::FIELD_INPUTS);
            $value = (array)$value;
            $this->inputs = $value;
        }
        return $this->inputs;
    }

    /**
     * @param $inputs
     * @return $this
     */
    public function setInputs($inputs)
    {
        $this->inputs = $inputs;

        return $this;
    }

}
