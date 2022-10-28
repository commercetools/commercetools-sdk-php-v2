<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StagedQuote;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StagedQuoteSetSellerCommentActionModel extends JsonObjectModel implements StagedQuoteSetSellerCommentAction
{
    public const DISCRIMINATOR_VALUE = 'setSellerComment';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $sellerComment;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $sellerComment = null,
        ?string $action = null
    ) {
        $this->sellerComment = $sellerComment;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>If <code>sellerComment</code> is absent or <code>null</code>, this field will be removed if it exists.</p>
     *
     *
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
