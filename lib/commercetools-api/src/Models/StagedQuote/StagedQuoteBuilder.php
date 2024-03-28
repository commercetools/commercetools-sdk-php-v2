<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StagedQuote;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReference;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReferenceBuilder;
use Commercetools\Api\Models\Cart\CartReference;
use Commercetools\Api\Models\Cart\CartReferenceBuilder;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceBuilder;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByBuilder;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByBuilder;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceBuilder;
use Commercetools\Api\Models\QuoteRequest\QuoteRequestReference;
use Commercetools\Api\Models\QuoteRequest\QuoteRequestReferenceBuilder;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceBuilder;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<StagedQuote>
 */
final class StagedQuoteBuilder implements Builder
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

     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**

     * @var ?DateTimeImmutable
     */
    private $lastModifiedAt;

    /**

     * @var ?string
     */
    private $key;

    /**

     * @var null|LastModifiedBy|LastModifiedByBuilder
     */
    private $lastModifiedBy;

    /**

     * @var null|CreatedBy|CreatedByBuilder
     */
    private $createdBy;

    /**

     * @var ?string
     */
    private $stagedQuoteState;

    /**

     * @var null|CustomerReference|CustomerReferenceBuilder
     */
    private $customer;

    /**

     * @var null|QuoteRequestReference|QuoteRequestReferenceBuilder
     */
    private $quoteRequest;

    /**

     * @var null|CartReference|CartReferenceBuilder
     */
    private $quotationCart;

    /**

     * @var ?DateTimeImmutable
     */
    private $validTo;

    /**

     * @var ?string
     */
    private $sellerComment;

    /**

     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $custom;

    /**

     * @var null|StateReference|StateReferenceBuilder
     */
    private $state;

    /**

     * @var ?string
     */
    private $purchaseOrderNumber;

    /**

     * @var null|BusinessUnitKeyReference|BusinessUnitKeyReferenceBuilder
     */
    private $businessUnit;

    /**
     * <p>The unique ID of the StagedQuote.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Current version of the StagedQuote.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Date and time (UTC) the StagedQuote was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p>Date and time (UTC) the StagedQuote was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>User-specific unique identifier of the staged quote.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>IDs and references that last modified the StagedQuote.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy;
    }

    /**
     * <p>IDs and references that created the StagedQuote.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        return $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy;
    }

    /**
     * <p>Predefined states tracking the status of the Staged Quote.</p>
     *

     * @return null|string
     */
    public function getStagedQuoteState()
    {
        return $this->stagedQuoteState;
    }

    /**
     * <p>The <a href="/../api/quotes-overview#buyer">Buyer</a> who requested the Quote.</p>
     *

     * @return null|CustomerReference
     */
    public function getCustomer()
    {
        return $this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer;
    }

    /**
     * <p>Quote Request related to the Staged Quote.</p>
     *

     * @return null|QuoteRequestReference
     */
    public function getQuoteRequest()
    {
        return $this->quoteRequest instanceof QuoteRequestReferenceBuilder ? $this->quoteRequest->build() : $this->quoteRequest;
    }

    /**
     * <p><a href="ctp:api:type:Cart">Cart</a> containing the offered items. May contain either <a href="ctp:api:type:DirectDiscount">DirectDiscounts</a> or <a href="ctp:api:type:CartDiscount">CartDiscounts</a>.</p>
     *

     * @return null|CartReference
     */
    public function getQuotationCart()
    {
        return $this->quotationCart instanceof CartReferenceBuilder ? $this->quotationCart->build() : $this->quotationCart;
    }

    /**
     * <p>Expiration date for the Quote.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * <p>Message from the <a href="/../api/quotes-overview#seller">Seller</a> included in the offer.</p>
     *

     * @return null|string
     */
    public function getSellerComment()
    {
        return $this->sellerComment;
    }

    /**
     * <p>Custom Fields of the Staged Quote.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * <p><a href="ctp:api:type:State">State</a> of the Staged Quote.
     * This reference can point to a State in a custom workflow.</p>
     *

     * @return null|StateReference
     */
    public function getState()
    {
        return $this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state;
    }

    /**
     * <p>The Purchase Order Number is typically set by the <a href="/quotes-overview#buyer">Buyer</a> on a <a href="ctp:api:type:QuoteRequest">QuoteRequest</a> to
     * track the purchase order during the <a href="/../api/quotes-overview#intended-workflow">quote and order flow</a>.</p>
     *

     * @return null|string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->purchaseOrderNumber;
    }

    /**
     * <p>The <a href="ctp:api:type:BusinessUnit">BusinessUnit</a> for the Staged Quote.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getBusinessUnit()
    {
        return $this->businessUnit instanceof BusinessUnitKeyReferenceBuilder ? $this->businessUnit->build() : $this->businessUnit;
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
     * @param ?DateTimeImmutable $createdAt
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     * @return $this
     */
    public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;

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
     * @param ?LastModifiedBy $lastModifiedBy
     * @return $this
     */
    public function withLastModifiedBy(?LastModifiedBy $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @param ?CreatedBy $createdBy
     * @return $this
     */
    public function withCreatedBy(?CreatedBy $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @param ?string $stagedQuoteState
     * @return $this
     */
    public function withStagedQuoteState(?string $stagedQuoteState)
    {
        $this->stagedQuoteState = $stagedQuoteState;

        return $this;
    }

    /**
     * @param ?CustomerReference $customer
     * @return $this
     */
    public function withCustomer(?CustomerReference $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @param ?QuoteRequestReference $quoteRequest
     * @return $this
     */
    public function withQuoteRequest(?QuoteRequestReference $quoteRequest)
    {
        $this->quoteRequest = $quoteRequest;

        return $this;
    }

    /**
     * @param ?CartReference $quotationCart
     * @return $this
     */
    public function withQuotationCart(?CartReference $quotationCart)
    {
        $this->quotationCart = $quotationCart;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $validTo
     * @return $this
     */
    public function withValidTo(?DateTimeImmutable $validTo)
    {
        $this->validTo = $validTo;

        return $this;
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

    /**
     * @param ?CustomFields $custom
     * @return $this
     */
    public function withCustom(?CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @param ?StateReference $state
     * @return $this
     */
    public function withState(?StateReference $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @param ?string $purchaseOrderNumber
     * @return $this
     */
    public function withPurchaseOrderNumber(?string $purchaseOrderNumber)
    {
        $this->purchaseOrderNumber = $purchaseOrderNumber;

        return $this;
    }

    /**
     * @param ?BusinessUnitKeyReference $businessUnit
     * @return $this
     */
    public function withBusinessUnit(?BusinessUnitKeyReference $businessUnit)
    {
        $this->businessUnit = $businessUnit;

        return $this;
    }

    /**
     * @deprecated use withLastModifiedBy() instead
     * @return $this
     */
    public function withLastModifiedByBuilder(?LastModifiedByBuilder $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @deprecated use withCreatedBy() instead
     * @return $this
     */
    public function withCreatedByBuilder(?CreatedByBuilder $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @deprecated use withCustomer() instead
     * @return $this
     */
    public function withCustomerBuilder(?CustomerReferenceBuilder $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @deprecated use withQuoteRequest() instead
     * @return $this
     */
    public function withQuoteRequestBuilder(?QuoteRequestReferenceBuilder $quoteRequest)
    {
        $this->quoteRequest = $quoteRequest;

        return $this;
    }

    /**
     * @deprecated use withQuotationCart() instead
     * @return $this
     */
    public function withQuotationCartBuilder(?CartReferenceBuilder $quotationCart)
    {
        $this->quotationCart = $quotationCart;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @deprecated use withState() instead
     * @return $this
     */
    public function withStateBuilder(?StateReferenceBuilder $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @deprecated use withBusinessUnit() instead
     * @return $this
     */
    public function withBusinessUnitBuilder(?BusinessUnitKeyReferenceBuilder $businessUnit)
    {
        $this->businessUnit = $businessUnit;

        return $this;
    }

    public function build(): StagedQuote
    {
        return new StagedQuoteModel(
            $this->id,
            $this->version,
            $this->createdAt,
            $this->lastModifiedAt,
            $this->key,
            $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy,
            $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy,
            $this->stagedQuoteState,
            $this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer,
            $this->quoteRequest instanceof QuoteRequestReferenceBuilder ? $this->quoteRequest->build() : $this->quoteRequest,
            $this->quotationCart instanceof CartReferenceBuilder ? $this->quotationCart->build() : $this->quotationCart,
            $this->validTo,
            $this->sellerComment,
            $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom,
            $this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state,
            $this->purchaseOrderNumber,
            $this->businessUnit instanceof BusinessUnitKeyReferenceBuilder ? $this->businessUnit->build() : $this->businessUnit
        );
    }

    public static function of(): StagedQuoteBuilder
    {
        return new self();
    }
}
