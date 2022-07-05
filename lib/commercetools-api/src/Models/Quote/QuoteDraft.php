<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Quote;

use Commercetools\Api\Models\StagedQuote\StagedQuoteResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface QuoteDraft extends JsonObject
{
    public const FIELD_STAGED_QUOTE = 'stagedQuote';
    public const FIELD_STAGED_QUOTE_VERSION = 'stagedQuoteVersion';
    public const FIELD_KEY = 'key';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>The StagedQuote from which this Quote is created.</p>
     *

     * @return null|StagedQuoteResourceIdentifier
     */
    public function getStagedQuote();

    /**
     * <p>Current version of the StagedQuote.</p>
     *

     * @return null|int
     */
    public function getStagedQuoteVersion();

    /**
     * <p>User-defined unique identifier for the Quote.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p><a href="/../api/projects/custom-fields">Custom Fields</a> to be added to the Quote.</p>
     * <ul>
     * <li>If specified, the Custom Fields are merged with the Custom Fields on the referenced <a href="/../api/projects/staged-quotes#stagedquote">StagedQuote</a> and added to the Quote.</li>
     * <li>If empty, the Custom Fields on the referenced <a href="/../api/projects/staged-quotes#stagedquote">StagedQuote</a> are added to the Quote automatically.</li>
     * </ul>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @param ?StagedQuoteResourceIdentifier $stagedQuote
     */
    public function setStagedQuote(?StagedQuoteResourceIdentifier $stagedQuote): void;

    /**
     * @param ?int $stagedQuoteVersion
     */
    public function setStagedQuoteVersion(?int $stagedQuoteVersion): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;
}
