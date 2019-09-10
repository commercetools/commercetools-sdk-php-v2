<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Review;

use Commercetools\Base\JsonObject;

interface ReviewSetTitleAction extends ReviewUpdateAction
{
    
    const FIELD_TITLE = 'title';

    /**
     *
     * @return string|null
     */
    public function getTitle();
    public function setTitle(?string $title): void;
}