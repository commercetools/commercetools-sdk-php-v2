<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CategorySetMetaDescriptionAction extends CategoryUpdateAction {
    protected $metaDescription;
    const DISCRIMINATOR_VALUE = 'setMetaDescription';

    /**
     * @return LocalizedString
     */
    public function getMetaDescription(): LocalizedString
    {
        if (is_null($this->metaDescription)) {
            $value = $this->raw('metaDescription');
            if (!is_null($value)) {
                $this->metaDescription = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->metaDescription;
    }
                
}
