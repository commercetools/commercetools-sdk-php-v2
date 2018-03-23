<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

interface ReviewSetAuthorNameAction extends ReviewUpdateAction {
    const FIELD_AUTHOR_NAME = 'authorName';

    /**
     * @return string
     */
    public function getAuthorName();

    /**
     * @param string $authorName
     * @return $this
     */
    public function setAuthorName(string $authorName);

}
