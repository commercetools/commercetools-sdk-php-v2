<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class MessageConfiguration extends JsonObject {
    protected $enabled;

    /**
     * @return bool
     */
    public function getEnabled(): bool
    {
        if (is_null($this->enabled)) {
            $value = $this->raw('enabled');
            if (!is_null($value)) {
                $this->enabled = (bool)$value;
            } else {
                return false;
            }
        }
        return $this->enabled;
    }
                
}
