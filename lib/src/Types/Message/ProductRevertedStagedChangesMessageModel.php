<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Message\MessageModel;

class ProductRevertedStagedChangesMessageModel extends MessageModel implements ProductRevertedStagedChangesMessage {
    const DISCRIMINATOR_VALUE = 'ProductRevertedStagedChanges';

    /**
     * @var array
     */
    protected $removedImageUrls;

    /**
     * @return array
     */
    public function getRemovedImageUrls()
    {
        if (is_null($this->removedImageUrls)) {
            $value = $this->raw(ProductRevertedStagedChangesMessage::FIELD_REMOVED_IMAGE_URLS);
            $this->removedImageUrls = $value;
        }
        return $this->removedImageUrls;
    }

    /**
     * @param $removedImageUrls
     * @return $this
     */
    public function setRemovedImageUrls($removedImageUrls)
    {
        $this->removedImageUrls = $removedImageUrls;

        return $this;
    }

}
