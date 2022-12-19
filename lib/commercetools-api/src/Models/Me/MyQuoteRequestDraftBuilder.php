<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyQuoteRequestDraft>
 */
final class MyQuoteRequestDraftBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $cartId;

    /**

     * @var ?int
     */
    private $cartVersion;

    /**

     * @var ?string
     */
    private $comment;

    /**
     * <p><code>id</code> of the Cart from which the Quote Request is created.</p>
     *

     * @return null|string
     */
    public function getCartId()
    {
        return $this->cartId;
    }

    /**
     * <p>Current version of the Cart.</p>
     *

     * @return null|int
     */
    public function getCartVersion()
    {
        return $this->cartVersion;
    }

    /**
     * <p>Message from the Buyer included in the Quote Request.</p>
     *

     * @return null|string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param ?string $cartId
     * @return $this
     */
    public function withCartId(?string $cartId)
    {
        $this->cartId = $cartId;

        return $this;
    }

    /**
     * @param ?int $cartVersion
     * @return $this
     */
    public function withCartVersion(?int $cartVersion)
    {
        $this->cartVersion = $cartVersion;

        return $this;
    }

    /**
     * @param ?string $comment
     * @return $this
     */
    public function withComment(?string $comment)
    {
        $this->comment = $comment;

        return $this;
    }


    public function build(): MyQuoteRequestDraft
    {
        return new MyQuoteRequestDraftModel(
            $this->cartId,
            $this->cartVersion,
            $this->comment
        );
    }

    public static function of(): MyQuoteRequestDraftBuilder
    {
        return new self();
    }
}
