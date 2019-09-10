<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Review;

use Commercetools\Base\JsonObject;

interface ReviewSetTextAction extends ReviewUpdateAction
{
    
    const FIELD_TEXT = 'text';

    /**
     *
     * @return string|null
     */
    public function getText();
    public function setText(?string $text): void;
}