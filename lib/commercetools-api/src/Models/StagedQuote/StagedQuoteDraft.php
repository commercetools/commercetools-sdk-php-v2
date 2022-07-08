<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StagedQuote;

use Commercetools\Api\Models\QuoteRequest\QuoteRequestResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedQuoteDraft extends JsonObject
{
    public const FIELD_QUOTE_REQUEST = 'quoteRequest';
    public const FIELD_QUOTE_REQUEST_VERSION = 'quoteRequestVersion';
    public const FIELD_KEY = 'key';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>The QuoteRequest from which this StagedQuote is created.</p>
     *
     * @return null|QuoteRequestResourceIdentifier
     */
    public function getQuoteRequest();

    /**
     * <p>Current version of the QuoteRequest.</p>
     *
     * @return null|int
     */
    public function getQuoteRequestVersion();

    /**
     * <p>User-defined unique identifier for the StagedQuote.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * <p><a href="/../api/projects/custom-fields">Custom Fields</a> to be added to the StagedQuote.</p>
     * <ul>
     * <li>If specified, the Custom Fields are merged with the Custom Fields on the referenced <a href="ctp:api:type:QuoteRequest">QuoteRequest</a> and added to the StagedQuote.</li>
     * <li>If empty, the Custom Fields on the referenced <a href="ctp:api:type:QuoteRequest">QuoteRequest</a> are added to the StagedQuote automatically.</li>
     * </ul>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @param ?QuoteRequestResourceIdentifier $quoteRequest
     */
    public function setQuoteRequest(?QuoteRequestResourceIdentifier $quoteRequest): void;

    /**
     * @param ?int $quoteRequestVersion
     */
    public function setQuoteRequestVersion(?int $quoteRequestVersion): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;
}
