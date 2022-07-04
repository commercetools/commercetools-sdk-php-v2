<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StagedQuoteSellerCommentSetMessagePayload>
 */
final class StagedQuoteSellerCommentSetMessagePayloadBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $sellerComment;

    /**
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


    public function build(): StagedQuoteSellerCommentSetMessagePayload
    {
        return new StagedQuoteSellerCommentSetMessagePayloadModel(
            $this->sellerComment
        );
    }

    public static function of(): StagedQuoteSellerCommentSetMessagePayloadBuilder
    {
        return new self();
    }
}
