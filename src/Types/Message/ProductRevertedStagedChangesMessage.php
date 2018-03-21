<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

interface ProductRevertedStagedChangesMessage extends Message {
    const FIELD_REMOVED_IMAGE_URLS = 'removedImageUrls';

    /**
     * @return array
     */
    public function getRemovedImageUrls();

    /**
     * @param array $removedImageUrls
     * @return $this
     */
    public function setRemovedImageUrls($removedImageUrls);

}
