<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CategoryChangeNameAction extends CategoryUpdateAction {
    protected $name;
    const DISCRIMINATOR_VALUE = 'changeName';

    /**
     * @return LocalizedString
     */
    public function getName(): LocalizedString
    {
        if (is_null($this->name)) {
            $value = $this->raw('name');
            if (!is_null($value)) {
                $this->name = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->name;
    }
                
}
