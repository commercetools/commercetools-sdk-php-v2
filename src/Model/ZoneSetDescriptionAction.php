<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ZoneSetDescriptionAction extends ZoneUpdateAction {
    protected $description;
    const DISCRIMINATOR_VALUE = 'setDescription';

    /**
     * @return string
     */
    public function getDescription(): string
    {
        if (is_null($this->description)) {
            $value = $this->raw('description');
            if (!is_null($value)) {
                $this->description = (string)$value;
            } else {
                return '';
            }
        }
        return $this->description;
    }
                
}
