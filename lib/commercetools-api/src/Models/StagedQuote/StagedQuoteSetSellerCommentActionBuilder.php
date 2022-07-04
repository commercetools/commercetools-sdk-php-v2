<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StagedQuote;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StagedQuoteSetSellerCommentAction>
 */
final class StagedQuoteSetSellerCommentActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $sellerComment;

    /**
     * <p>If <code>sellerComment</code> is absent or <code>null</code>, this field will be removed if it exists.</p>
     *
     * @return null|string
     */
    public function getSellerComment()
    {
        return $this->sellerComment;
    }

    /**
     * @param ?string $sellerComment
     * @return $this
     */
    public function withSellerComment(?string $sellerComment)
    {
        $this->sellerComment = $sellerComment;

        return $this;
    }


    public function build(): StagedQuoteSetSellerCommentAction
    {
        return new StagedQuoteSetSellerCommentActionModel(
            $this->sellerComment
        );
    }

    public static function of(): StagedQuoteSetSellerCommentActionBuilder
    {
        return new self();
    }
}
