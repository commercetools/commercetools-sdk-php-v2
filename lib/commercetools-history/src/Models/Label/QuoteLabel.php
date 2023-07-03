<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Label;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\Reference;

interface QuoteLabel extends Label
{

    public const FIELD_KEY = 'key';
    public const FIELD_CUSTOMER = 'customer';
    public const FIELD_STAGED_QUOTE = 'stagedQuote';
    public const FIELD_QUOTE_REQUEST = 'quoteRequest';

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>User-defined unique identifier of the Quote.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>The <a href="/../api/quotes-overview#buyer">Buyer</a> who requested the Quote.</p>
     *

     * @return null|Reference
     */
    public function getCustomer();

    /**
     * <p>Staged Quote related to the Quote.</p>
     *

     * @return null|Reference
     */
    public function getStagedQuote();

    /**
     * <p>Quote Request related to the Quote.</p>
     *

     * @return null|Reference
     */
    public function getQuoteRequest();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?Reference $customer
     */
    public function setCustomer(?Reference $customer): void;

    /**
     * @param ?Reference $stagedQuote
     */
    public function setStagedQuote(?Reference $stagedQuote): void;

    /**
     * @param ?Reference $quoteRequest
     */
    public function setQuoteRequest(?Reference $quoteRequest): void;
}
