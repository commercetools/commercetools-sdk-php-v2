<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Common\LocalizedString;

interface ProductSlugChangedMessage extends Message
{
    const FIELD_SLUG = 'slug';

    /**
     * @return LocalizedString
     */
    public function getSlug();

    /**
     * @param LocalizedString $slug
     * @return $this
     */
    public function setSlug(LocalizedString $slug);

}
