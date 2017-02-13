<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class AttributeType extends JsonObject {
    protected $name;

    const DISCRIMINATOR_VALUE = null;
    public function __construct(array $data = []) {
        $this->name = static::DISCRIMINATOR_VALUE;
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        if (is_null($this->name)) {
            $value = $this->raw('name');
            if (!is_null($value)) {
                $this->name = (string)$value;
            } else {
                return '';
            }
        }
        return $this->name;
    }
                
}
