<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class UpdateAction extends JsonObject {
    protected $action;

    const DISCRIMINATOR_VALUE = null;
    const DISCRIMINATOR_FIELD = 'action';
    public function __construct(array $data = []) {
        $this->action = static::DISCRIMINATOR_VALUE;
        parent::__construct($data);
    }

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
