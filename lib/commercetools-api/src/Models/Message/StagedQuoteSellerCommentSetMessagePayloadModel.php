<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StagedQuoteSellerCommentSetMessagePayloadModel extends JsonObjectModel implements StagedQuoteSellerCommentSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'StagedQuoteSellerCommentSet';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $sellerComment;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $sellerComment = null
    ) {
        $this->sellerComment = $sellerComment;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|string
     */
    public function getSellerComment()
    {
        if (is_null($this->sellerComment)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SELLER_COMMENT);
            if (is_null($data)) {
                return null;
            }
            $this->sellerComment = (string) $data;
        }

        return $this->sellerComment;
    }


    /**
     * @param ?string $sellerComment
     */
    public function setSellerComment(?string $sellerComment): void
    {
        $this->sellerComment = $sellerComment;
    }
}
