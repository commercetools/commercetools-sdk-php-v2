<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StagedQuote;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReference;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReferenceModel;
use Commercetools\Api\Models\Cart\CartReference;
use Commercetools\Api\Models\Cart\CartReferenceModel;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceModel;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByModel;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByModel;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceModel;
use Commercetools\Api\Models\QuoteRequest\QuoteRequestReference;
use Commercetools\Api\Models\QuoteRequest\QuoteRequestReferenceModel;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceModel;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class StagedQuoteModel extends JsonObjectModel implements StagedQuote
{
    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     *
     * @var ?int
     */
    protected $version;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?LastModifiedBy
     */
    protected $lastModifiedBy;

    /**
     *
     * @var ?CreatedBy
     */
    protected $createdBy;

    /**
     *
     * @var ?string
     */
    protected $stagedQuoteState;

    /**
     *
     * @var ?CustomerReference
     */
    protected $customer;

    /**
     *
     * @var ?QuoteRequestReference
     */
    protected $quoteRequest;

    /**
     *
     * @var ?CartReference
     */
    protected $quotationCart;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $validTo;

    /**
     *
     * @var ?string
     */
    protected $sellerComment;

    /**
     *
     * @var ?CustomFields
     */
    protected $custom;

    /**
     *
     * @var ?StateReference
     */
    protected $state;

    /**
     *
     * @var ?string
     */
    protected $purchaseOrderNumber;

    /**
     *
     * @var ?BusinessUnitKeyReference
     */
    protected $businessUnit;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?int $version = null,
        ?DateTimeImmutable $createdAt = null,
        ?DateTimeImmutable $lastModifiedAt = null,
        ?string $key = null,
        ?LastModifiedBy $lastModifiedBy = null,
        ?CreatedBy $createdBy = null,
        ?string $stagedQuoteState = null,
        ?CustomerReference $customer = null,
        ?QuoteRequestReference $quoteRequest = null,
        ?CartReference $quotationCart = null,
        ?DateTimeImmutable $validTo = null,
        ?string $sellerComment = null,
        ?CustomFields $custom = null,
        ?StateReference $state = null,
        ?string $purchaseOrderNumber = null,
        ?BusinessUnitKeyReference $businessUnit = null
    ) {
        $this->id = $id;
        $this->version = $version;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->key = $key;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->createdBy = $createdBy;
        $this->stagedQuoteState = $stagedQuoteState;
        $this->customer = $customer;
        $this->quoteRequest = $quoteRequest;
        $this->quotationCart = $quotationCart;
        $this->validTo = $validTo;
        $this->sellerComment = $sellerComment;
        $this->custom = $custom;
        $this->state = $state;
        $this->purchaseOrderNumber = $purchaseOrderNumber;
        $this->businessUnit = $businessUnit;
    }

    /**
     * <p>The unique ID of the StagedQuote.</p>
     *
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>Current version of the StagedQuote.</p>
     *
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * <p>Date and time (UTC) the StagedQuote was initially created.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CREATED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->createdAt = $data;
        }

        return $this->createdAt;
    }

    /**
     * <p>Date and time (UTC) the StagedQuote was last updated.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->lastModifiedAt = $data;
        }

        return $this->lastModifiedAt;
    }

    /**
     * <p>User-specific unique identifier of the staged quote.</p>
     *
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>IDs and references that last modified the StagedQuote.</p>
     *
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        if (is_null($this->lastModifiedBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->lastModifiedBy = LastModifiedByModel::of($data);
        }

        return $this->lastModifiedBy;
    }

    /**
     * <p>IDs and references that created the StagedQuote.</p>
     *
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        if (is_null($this->createdBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CREATED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->createdBy = CreatedByModel::of($data);
        }

        return $this->createdBy;
    }

    /**
     * <p>Predefined states tracking the status of the Staged Quote.</p>
     *
     *
     * @return null|string
     */
    public function getStagedQuoteState()
    {
        if (is_null($this->stagedQuoteState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_STAGED_QUOTE_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->stagedQuoteState = (string) $data;
        }

        return $this->stagedQuoteState;
    }

    /**
     * <p>The <a href="/../api/quotes-overview#buyer">Buyer</a> who requested the Quote.</p>
     *
     *
     * @return null|CustomerReference
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER);
            if (is_null($data)) {
                return null;
            }

            $this->customer = CustomerReferenceModel::of($data);
        }

        return $this->customer;
    }

    /**
     * <p>Quote Request related to the Staged Quote.</p>
     *
     *
     * @return null|QuoteRequestReference
     */
    public function getQuoteRequest()
    {
        if (is_null($this->quoteRequest)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_QUOTE_REQUEST);
            if (is_null($data)) {
                return null;
            }

            $this->quoteRequest = QuoteRequestReferenceModel::of($data);
        }

        return $this->quoteRequest;
    }

    /**
     * <p><a href="ctp:api:type:Cart">Cart</a> containing the offered items. May contain either <a href="ctp:api:type:DirectDiscount">DirectDiscounts</a> or <a href="ctp:api:type:CartDiscount">CartDiscounts</a>.</p>
     *
     *
     * @return null|CartReference
     */
    public function getQuotationCart()
    {
        if (is_null($this->quotationCart)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_QUOTATION_CART);
            if (is_null($data)) {
                return null;
            }

            $this->quotationCart = CartReferenceModel::of($data);
        }

        return $this->quotationCart;
    }

    /**
     * <p>Expiration date for the Quote.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getValidTo()
    {
        if (is_null($this->validTo)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_VALID_TO);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->validTo = $data;
        }

        return $this->validTo;
    }

    /**
     * <p>Message from the <a href="/../api/quotes-overview#seller">Seller</a> included in the offer.</p>
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
     * <p>Custom Fields of the Staged Quote.</p>
     *
     *
     * @return null|CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsModel::of($data);
        }

        return $this->custom;
    }

    /**
     * <p><a href="ctp:api:type:State">State</a> of the Staged Quote.
     * This reference can point to a State in a custom workflow.</p>
     *
     *
     * @return null|StateReference
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->state = StateReferenceModel::of($data);
        }

        return $this->state;
    }

    /**
     * <p>The Purchase Order Number is typically set by the <a href="/quotes-overview#buyer">Buyer</a> on a <a href="ctp:api:type:QuoteRequest">QuoteRequest</a> to
     * track the purchase order during the <a href="/../api/quotes-overview#intended-workflow">quote and order flow</a>.</p>
     *
     *
     * @return null|string
     */
    public function getPurchaseOrderNumber()
    {
        if (is_null($this->purchaseOrderNumber)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PURCHASE_ORDER_NUMBER);
            if (is_null($data)) {
                return null;
            }
            $this->purchaseOrderNumber = (string) $data;
        }

        return $this->purchaseOrderNumber;
    }

    /**
     * <p>The <a href="ctp:api:type:BusinessUnit">BusinessUnit</a> for the Staged Quote.</p>
     *
     *
     * @return null|BusinessUnitKeyReference
     */
    public function getBusinessUnit()
    {
        if (is_null($this->businessUnit)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_BUSINESS_UNIT);
            if (is_null($data)) {
                return null;
            }

            $this->businessUnit = BusinessUnitKeyReferenceModel::of($data);
        }

        return $this->businessUnit;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void
    {
        $this->lastModifiedBy = $lastModifiedBy;
    }

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void
    {
        $this->createdBy = $createdBy;
    }

    /**
     * @param ?string $stagedQuoteState
     */
    public function setStagedQuoteState(?string $stagedQuoteState): void
    {
        $this->stagedQuoteState = $stagedQuoteState;
    }

    /**
     * @param ?CustomerReference $customer
     */
    public function setCustomer(?CustomerReference $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * @param ?QuoteRequestReference $quoteRequest
     */
    public function setQuoteRequest(?QuoteRequestReference $quoteRequest): void
    {
        $this->quoteRequest = $quoteRequest;
    }

    /**
     * @param ?CartReference $quotationCart
     */
    public function setQuotationCart(?CartReference $quotationCart): void
    {
        $this->quotationCart = $quotationCart;
    }

    /**
     * @param ?DateTimeImmutable $validTo
     */
    public function setValidTo(?DateTimeImmutable $validTo): void
    {
        $this->validTo = $validTo;
    }

    /**
     * @param ?string $sellerComment
     */
    public function setSellerComment(?string $sellerComment): void
    {
        $this->sellerComment = $sellerComment;
    }

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }

    /**
     * @param ?StateReference $state
     */
    public function setState(?StateReference $state): void
    {
        $this->state = $state;
    }

    /**
     * @param ?string $purchaseOrderNumber
     */
    public function setPurchaseOrderNumber(?string $purchaseOrderNumber): void
    {
        $this->purchaseOrderNumber = $purchaseOrderNumber;
    }

    /**
     * @param ?BusinessUnitKeyReference $businessUnit
     */
    public function setBusinessUnit(?BusinessUnitKeyReference $businessUnit): void
    {
        $this->businessUnit = $businessUnit;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[StagedQuote::FIELD_CREATED_AT]) && $data[StagedQuote::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[StagedQuote::FIELD_CREATED_AT] = $data[StagedQuote::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[StagedQuote::FIELD_LAST_MODIFIED_AT]) && $data[StagedQuote::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[StagedQuote::FIELD_LAST_MODIFIED_AT] = $data[StagedQuote::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[StagedQuote::FIELD_VALID_TO]) && $data[StagedQuote::FIELD_VALID_TO] instanceof \DateTimeImmutable) {
            $data[StagedQuote::FIELD_VALID_TO] = $data[StagedQuote::FIELD_VALID_TO]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
