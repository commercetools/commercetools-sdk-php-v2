<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedQuoteSellerCommentSetMessage extends Message
{
    public const FIELD_SELLER_COMMENT = 'sellerComment';

    /**

     * @return null|string
     */
    public function getSellerComment();

    /**
     * @param ?string $sellerComment
     */
    public function setSellerComment(?string $sellerComment): void;
}
