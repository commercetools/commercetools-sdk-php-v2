<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class Update extends JsonObject {
    protected $version;
    protected $actions;

    /**
     * @return int
     */
    public function getVersion(): int
    {
        if (is_null($this->version)) {
            $value = $this->raw('version');
            if (!is_null($value)) {
                $this->version = (int)$value;
            } else {
                return 0;
            }
        }
        return $this->version;
    }
                

    /**
     * @return array
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            $value = $this->raw('actions');
            if (!is_null($value)) {
                $this->actions = $value;
            } else {
                return [];
            }
        }
        return $this->actions;
    }
                
}
