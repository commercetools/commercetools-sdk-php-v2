<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StagedQuote;

use Commercetools\Api\Models\Cart\CartReference;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\QuoteRequest\QuoteRequestReference;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface StagedQuote extends BaseResource
{
    public const FIELD_KEY = 'key';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_STAGED_QUOTE_STATE = 'stagedQuoteState';
    public const FIELD_CUSTOMER = 'customer';
    public const FIELD_QUOTE_REQUEST = 'quoteRequest';
    public const FIELD_QUOTATION_CART = 'quotationCart';
    public const FIELD_VALID_TO = 'validTo';
    public const FIELD_SELLER_COMMENT = 'sellerComment';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_STATE = 'state';

    /**
     * <p>The unique ID of the StagedQuote.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the StagedQuote.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>User-specific unique identifier of the staged quote.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Date and time (UTC) the StagedQuote was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the StagedQuote was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>Predefined states tracking the status of the Staged Quote.</p>
     *

     * @return null|string
     */
    public function getStagedQuoteState();

    /**
     * <p>The <a href="/../api/quotes-overview#buyer">Buyer</a> who requested the quote.</p>
     *

     * @return null|CustomerReference
     */
    public function getCustomer();

    /**
     * <p>The Quote Request related to this Staged Quote.</p>
     *

     * @return null|QuoteRequestReference
     */
    public function getQuoteRequest();

    /**
     * <p>The <a href="ctp:api:type:Cart">Cart</a> containing the offered items.</p>
     *

     * @return null|CartReference
     */
    public function getQuotationCart();

    /**
     * <p>Expiration date for the quote.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidTo();

    /**
     * <p>The text message included in the offer from the <a href="/../api/quotes-overview#seller">Seller</a>.</p>
     *

     * @return null|string
     */
    public function getSellerComment();

    /**
     * <p>Custom Fields of this Staged Quote.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * <p><a href="ctp:api:type:State">State</a> of this Staged Quote.
     * This reference can point to a State in a custom workflow.</p>
     *

     * @return null|StateReference
     */
    public function getState();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void;

    /**
     * @param ?string $stagedQuoteState
     */
    public function setStagedQuoteState(?string $stagedQuoteState): void;

    /**
     * @param ?CustomerReference $customer
     */
    public function setCustomer(?CustomerReference $customer): void;

    /**
     * @param ?QuoteRequestReference $quoteRequest
     */
    public function setQuoteRequest(?QuoteRequestReference $quoteRequest): void;

    /**
     * @param ?CartReference $quotationCart
     */
    public function setQuotationCart(?CartReference $quotationCart): void;

    /**
     * @param ?DateTimeImmutable $validTo
     */
    public function setValidTo(?DateTimeImmutable $validTo): void;

    /**
     * @param ?string $sellerComment
     */
    public function setSellerComment(?string $sellerComment): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;

    /**
     * @param ?StateReference $state
     */
    public function setState(?StateReference $state): void;
}
