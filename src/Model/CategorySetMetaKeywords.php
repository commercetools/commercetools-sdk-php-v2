<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CategorySetMetaKeywords extends CategoryUpdateAction {
    protected $metaKeywords;
    const DISCRIMINATOR_VALUE = 'setMetaKeywords';

    /**
     * @return LocalizedString
     */
    public function getMetaKeywords(): LocalizedString
    {
        if (is_null($this->metaKeywords)) {
            $value = $this->raw('metaKeywords');
            if (!is_null($value)) {
                $this->metaKeywords = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->metaKeywords;
    }
                
}
