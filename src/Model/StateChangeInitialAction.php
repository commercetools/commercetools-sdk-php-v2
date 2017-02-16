<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class StateChangeInitialAction extends StateUpdateAction {
    protected $initial;
    const DISCRIMINATOR_VALUE = 'changeInitial';

    /**
     * @return bool
     */
    public function getInitial(): bool
    {
        if (is_null($this->initial)) {
            $value = $this->raw('initial');
            if (!is_null($value)) {
                $this->initial = (bool)$value;
            } else {
                return false;
            }
        }
        return $this->initial;
    }
                
}
