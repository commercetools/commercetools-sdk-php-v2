<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Message\MessageModel;

use Commercetools\Types\Common\LocalizedString;

class ProductSlugChangedMessageModel extends MessageModel implements ProductSlugChangedMessage
{
    const DISCRIMINATOR_VALUE = 'ProductSlugChanged';

    /**
     * @var LocalizedString
     */
    protected $slug;

    /**
     * @return LocalizedString
     */
    public function getSlug()
    {
        if (is_null($this->slug)) {
            $value = $this->raw(ProductSlugChangedMessage::FIELD_SLUG);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->slug = $value;
        }
        return $this->slug;
    }

    /**
     * @param LocalizedString $slug
     * @return $this
     */
    public function setSlug(LocalizedString $slug)
    {
        $this->slug = $slug;

        return $this;
    }

}
