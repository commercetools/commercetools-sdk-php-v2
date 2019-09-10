<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Review;

use Commercetools\Base\JsonObject;

interface ReviewSetAuthorNameAction extends ReviewUpdateAction
{
    
    const FIELD_AUTHOR_NAME = 'authorName';

    /**
     *
     * @return string|null
     */
    public function getAuthorName();
    public function setAuthorName(?string $authorName): void;
}