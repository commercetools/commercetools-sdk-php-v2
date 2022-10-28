<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderEditSetCommentAction extends OrderEditUpdateAction
{
    public const FIELD_COMMENT = 'comment';

    /**

     * @return null|string
     */
    public function getComment();

    /**
     * @param ?string $comment
     */
    public function setComment(?string $comment): void;
}
