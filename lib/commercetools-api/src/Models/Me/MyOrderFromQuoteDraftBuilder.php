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
 * @implements Builder<MyOrderFromQuoteDraft>
 */
final class MyOrderFromQuoteDraftBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var ?int
     */
    private $version;

    /**

     * @var ?bool
     */
    private $quoteStateToAccepted;

    /**
     * <p>Unique identifier of the Quote from which the Order is created.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p><code>version</code> of the <a href="ctp:api:type:quote">Quote</a> from which the Order is created.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Set to <code>true</code>, if the <code>quoteState</code> of the referenced <a href="ctp:api:type:quote">Quote</a> should be set to <code>Accepted</code>.</p>
     *

     * @return null|bool
     */
    public function getQuoteStateToAccepted()
    {
        return $this->quoteStateToAccepted;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?bool $quoteStateToAccepted
     * @return $this
     */
    public function withQuoteStateToAccepted(?bool $quoteStateToAccepted)
    {
        $this->quoteStateToAccepted = $quoteStateToAccepted;

        return $this;
    }


    public function build(): MyOrderFromQuoteDraft
    {
        return new MyOrderFromQuoteDraftModel(
            $this->id,
            $this->version,
            $this->quoteStateToAccepted
        );
    }

    public static function of(): MyOrderFromQuoteDraftBuilder
    {
        return new self();
    }
}
