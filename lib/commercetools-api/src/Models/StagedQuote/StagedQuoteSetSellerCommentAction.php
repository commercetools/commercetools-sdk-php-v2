<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StagedQuote;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedQuoteSetSellerCommentAction extends StagedQuoteUpdateAction
{
    public const FIELD_SELLER_COMMENT = 'sellerComment';

    /**
     * <p>If <code>sellerComment</code> is absent or <code>null</code>, this field will be removed if it exists.</p>
     *

     * @return null|string
     */
    public function getSellerComment();

    /**
     * @param ?string $sellerComment
     */
    public function setSellerComment(?string $sellerComment): void;
}
