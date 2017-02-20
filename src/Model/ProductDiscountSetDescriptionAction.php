<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductDiscountSetDescriptionAction extends ProductDiscountUpdateAction {
    protected $description;
    const DISCRIMINATOR_VALUE = 'setDescription';

    /**
     * @return LocalizedString
     */
    public function getDescription(): LocalizedString
    {
        if (is_null($this->description)) {
            $value = $this->raw('description');
            if (!is_null($value)) {
                $this->description = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->description;
    }
                
}
