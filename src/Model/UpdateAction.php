<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class UpdateAction extends JsonObject {
    protected $action;

    /**
     * @return string
     */
    public function getAction(): string
    {
        if (is_null($this->action)) {
            $value = $this->raw('action');
            if (!is_null($value)) {
                $this->action = (string)$value;
            } else {
                return '';
            }
        }
        return $this->action;
    }
                
}
