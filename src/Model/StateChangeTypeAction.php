<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class StateChangeTypeAction extends StateUpdateAction {
    protected $type;
    const DISCRIMINATOR_VALUE = 'changeType';

    /**
     * @return string
     */
    public function getType(): string
    {
        if (is_null($this->type)) {
            $value = $this->raw('type');
            if (!is_null($value)) {
                $this->type = (string)$value;
            } else {
                return '';
            }
        }
        return $this->type;
    }
                
}
