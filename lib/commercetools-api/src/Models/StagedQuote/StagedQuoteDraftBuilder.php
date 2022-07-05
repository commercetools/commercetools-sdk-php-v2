<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StagedQuote;

use Commercetools\Api\Models\QuoteRequest\QuoteRequestResourceIdentifier;
use Commercetools\Api\Models\QuoteRequest\QuoteRequestResourceIdentifierBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StagedQuoteDraft>
 */
final class StagedQuoteDraftBuilder implements Builder
{
    /**

     * @var null|QuoteRequestResourceIdentifier|QuoteRequestResourceIdentifierBuilder
     */
    private $quoteRequest;

    /**

     * @var ?int
     */
    private $quoteRequestVersion;

    /**

     * @var ?string
     */
    private $key;

    /**

     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
     */
    private $custom;

    /**
     * <p>The QuoteRequest from which this StagedQuote is created.</p>
     *

     * @return null|QuoteRequestResourceIdentifier
     */
    public function getQuoteRequest()
    {
        return $this->quoteRequest instanceof QuoteRequestResourceIdentifierBuilder ? $this->quoteRequest->build() : $this->quoteRequest;
    }

    /**
     * <p>Current version of the QuoteRequest.</p>
     *

     * @return null|int
     */
    public function getQuoteRequestVersion()
    {
        return $this->quoteRequestVersion;
    }

    /**
     * <p>User-defined unique identifier for the StagedQuote.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p><a href="/../api/projects/custom-fields">Custom Fields</a> to be added to the StagedQuote.</p>
     * <ul>
     * <li>If specified, the Custom Fields are merged with the Custom Fields on the referenced <a href="ctp:api:type:QuoteRequest">QuoteRequest</a> and added to the StagedQuote.</li>
     * <li>If empty, the Custom Fields on the referenced <a href="ctp:api:type:QuoteRequest">QuoteRequest</a> are added to the StagedQuote automatically.</li>
     * </ul>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @param ?QuoteRequestResourceIdentifier $quoteRequest
     * @return $this
     */
    public function withQuoteRequest(?QuoteRequestResourceIdentifier $quoteRequest)
    {
        $this->quoteRequest = $quoteRequest;

        return $this;
    }

    /**
     * @param ?int $quoteRequestVersion
     * @return $this
     */
    public function withQuoteRequestVersion(?int $quoteRequestVersion)
    {
        $this->quoteRequestVersion = $quoteRequestVersion;

        return $this;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     * @return $this
     */
    public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @deprecated use withQuoteRequest() instead
     * @return $this
     */
    public function withQuoteRequestBuilder(?QuoteRequestResourceIdentifierBuilder $quoteRequest)
    {
        $this->quoteRequest = $quoteRequest;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): StagedQuoteDraft
    {
        return new StagedQuoteDraftModel(
            $this->quoteRequest instanceof QuoteRequestResourceIdentifierBuilder ? $this->quoteRequest->build() : $this->quoteRequest,
            $this->quoteRequestVersion,
            $this->key,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): StagedQuoteDraftBuilder
    {
        return new self();
    }
}
