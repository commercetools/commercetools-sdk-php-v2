<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CategoryUpdate extends Update {
    protected $actions;

    /**
     * @return array
     */
    public function getActions(): array
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
