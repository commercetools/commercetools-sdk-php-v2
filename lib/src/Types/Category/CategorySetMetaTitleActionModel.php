<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Category\CategoryUpdateActionModel;

use Commercetools\Types\Common\LocalizedString;

class CategorySetMetaTitleActionModel extends CategoryUpdateActionModel implements CategorySetMetaTitleAction {
    const DISCRIMINATOR_VALUE = 'setMetaTitle';

    /**
     * @var LocalizedString
     */
    protected $metaTitle;

    /**
     * @return LocalizedString
     */
    public function getMetaTitle()
    {
        if (is_null($this->metaTitle)) {
            $value = $this->raw(CategorySetMetaTitleAction::FIELD_META_TITLE);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->metaTitle = $value;
        }
        return $this->metaTitle;
    }

    /**
     * @param LocalizedString $metaTitle
     * @return $this
     */
    public function setMetaTitle(LocalizedString $metaTitle)
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }

}
