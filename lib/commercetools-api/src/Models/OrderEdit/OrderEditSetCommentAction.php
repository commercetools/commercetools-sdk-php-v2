<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;

interface OrderEditSetCommentAction extends OrderEditUpdateAction
{
    
    const FIELD_COMMENT = 'comment';

    /**
     *
     * @return string|null
     */
    public function getComment();
    public function setComment(?string $comment): void;
}