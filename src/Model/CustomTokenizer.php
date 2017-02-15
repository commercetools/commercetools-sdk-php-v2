<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CustomTokenizer extends SuggestTokenizer {
    protected $inputs;
    const DISCRIMINATOR_VALUE = 'custom';

    /**
     * @return array
     */
    public function getInputs(): array
    {
        if (is_null($this->inputs)) {
            $value = $this->raw('inputs');
            if (!is_null($value)) {
                $this->inputs = $value;
            } else {
                return [];
            }
        }
        return $this->inputs;
    }
                
}
