<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CategorySetMetaTitle extends CategoryUpdateAction {
    protected $metaTitle;
    const DISCRIMINATOR_VALUE = 'setMetaTitle';

    /**
     * @return LocalizedString
     */
    public function getMetaTitle(): LocalizedString
    {
        if (is_null($this->metaTitle)) {
            $value = $this->raw('metaTitle');
            if (!is_null($value)) {
                $this->metaTitle = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->metaTitle;
    }
                
}
