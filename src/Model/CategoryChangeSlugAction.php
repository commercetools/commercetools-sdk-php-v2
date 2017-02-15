<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CategoryChangeSlugAction extends CategoryUpdateAction {
    protected $slug;
    const DISCRIMINATOR_VALUE = 'changeSlug';

    /**
     * @return LocalizedString
     */
    public function getSlug(): LocalizedString
    {
        if (is_null($this->slug)) {
            $value = $this->raw('slug');
            if (!is_null($value)) {
                $this->slug = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->slug;
    }
                
}
