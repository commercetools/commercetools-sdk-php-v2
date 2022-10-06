<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\BusinessUnit\BusinessUnit;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitModel;
use Commercetools\Api\Models\BusinessUnit\Company;
use Commercetools\Api\Models\BusinessUnit\CompanyModel;
use Commercetools\Api\Models\BusinessUnit\Division;
use Commercetools\Api\Models\BusinessUnit\DivisionModel;
use Commercetools\Api\Models\Cart\Cart;
use Commercetools\Api\Models\Cart\CartModel;
use Commercetools\Api\Models\CartDiscount\CartDiscount;
use Commercetools\Api\Models\CartDiscount\CartDiscountModel;
use Commercetools\Api\Models\Category\Category;
use Commercetools\Api\Models\Category\CategoryModel;
use Commercetools\Api\Models\Channel\Channel;
use Commercetools\Api\Models\Channel\ChannelModel;
use Commercetools\Api\Models\Customer\Customer;
use Commercetools\Api\Models\Customer\CustomerModel;
use Commercetools\Api\Models\CustomerGroup\CustomerGroup;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupModel;
use Commercetools\Api\Models\CustomObject\CustomObject;
use Commercetools\Api\Models\CustomObject\CustomObjectModel;
use Commercetools\Api\Models\DiscountCode\DiscountCode;
use Commercetools\Api\Models\DiscountCode\DiscountCodeModel;
use Commercetools\Api\Models\Extension\Extension;
use Commercetools\Api\Models\Extension\ExtensionModel;
use Commercetools\Api\Models\Inventory\InventoryEntry;
use Commercetools\Api\Models\Inventory\InventoryEntryModel;
use Commercetools\Api\Models\Message\BusinessUnitAddressAddedMessage;
use Commercetools\Api\Models\Message\BusinessUnitAddressAddedMessageModel;
use Commercetools\Api\Models\Message\BusinessUnitAddressChangedMessage;
use Commercetools\Api\Models\Message\BusinessUnitAddressChangedMessageModel;
use Commercetools\Api\Models\Message\BusinessUnitAddressRemovedMessage;
use Commercetools\Api\Models\Message\BusinessUnitAddressRemovedMessageModel;
use Commercetools\Api\Models\Message\BusinessUnitAssociateAddedMessage;
use Commercetools\Api\Models\Message\BusinessUnitAssociateAddedMessageModel;
use Commercetools\Api\Models\Message\BusinessUnitAssociateChangedMessage;
use Commercetools\Api\Models\Message\BusinessUnitAssociateChangedMessageModel;
use Commercetools\Api\Models\Message\BusinessUnitAssociateRemovedMessage;
use Commercetools\Api\Models\Message\BusinessUnitAssociateRemovedMessageModel;
use Commercetools\Api\Models\Message\BusinessUnitAssociatesSetMessage;
use Commercetools\Api\Models\Message\BusinessUnitAssociatesSetMessageModel;
use Commercetools\Api\Models\Message\BusinessUnitBillingAddressAddedMessage;
use Commercetools\Api\Models\Message\BusinessUnitBillingAddressAddedMessageModel;
use Commercetools\Api\Models\Message\BusinessUnitBillingAddressRemovedMessage;
use Commercetools\Api\Models\Message\BusinessUnitBillingAddressRemovedMessageModel;
use Commercetools\Api\Models\Message\BusinessUnitContactEmailSetMessage;
use Commercetools\Api\Models\Message\BusinessUnitContactEmailSetMessageModel;
use Commercetools\Api\Models\Message\BusinessUnitCreatedMessage;
use Commercetools\Api\Models\Message\BusinessUnitCreatedMessageModel;
use Commercetools\Api\Models\Message\BusinessUnitDefaultBillingAddressSetMessage;
use Commercetools\Api\Models\Message\BusinessUnitDefaultBillingAddressSetMessageModel;
use Commercetools\Api\Models\Message\BusinessUnitDefaultShippingAddressSetMessage;
use Commercetools\Api\Models\Message\BusinessUnitDefaultShippingAddressSetMessageModel;
use Commercetools\Api\Models\Message\BusinessUnitDeletedMessage;
use Commercetools\Api\Models\Message\BusinessUnitDeletedMessageModel;
use Commercetools\Api\Models\Message\BusinessUnitNameChangedMessage;
use Commercetools\Api\Models\Message\BusinessUnitNameChangedMessageModel;
use Commercetools\Api\Models\Message\BusinessUnitParentUnitChangedMessage;
use Commercetools\Api\Models\Message\BusinessUnitParentUnitChangedMessageModel;
use Commercetools\Api\Models\Message\BusinessUnitShippingAddressAddedMessage;
use Commercetools\Api\Models\Message\BusinessUnitShippingAddressAddedMessageModel;
use Commercetools\Api\Models\Message\BusinessUnitShippingAddressRemovedMessage;
use Commercetools\Api\Models\Message\BusinessUnitShippingAddressRemovedMessageModel;
use Commercetools\Api\Models\Message\BusinessUnitStatusChangedMessage;
use Commercetools\Api\Models\Message\BusinessUnitStatusChangedMessageModel;
use Commercetools\Api\Models\Message\BusinessUnitStoreAddedMessage;
use Commercetools\Api\Models\Message\BusinessUnitStoreAddedMessageModel;
use Commercetools\Api\Models\Message\BusinessUnitStoreModeChangedMessage;
use Commercetools\Api\Models\Message\BusinessUnitStoreModeChangedMessageModel;
use Commercetools\Api\Models\Message\BusinessUnitStoreRemovedMessage;
use Commercetools\Api\Models\Message\BusinessUnitStoreRemovedMessageModel;
use Commercetools\Api\Models\Message\BusinessUnitStoresSetMessage;
use Commercetools\Api\Models\Message\BusinessUnitStoresSetMessageModel;
use Commercetools\Api\Models\Message\CategoryCreatedMessage;
use Commercetools\Api\Models\Message\CategoryCreatedMessageModel;
use Commercetools\Api\Models\Message\CategorySlugChangedMessage;
use Commercetools\Api\Models\Message\CategorySlugChangedMessageModel;
use Commercetools\Api\Models\Message\CustomerAddressAddedMessage;
use Commercetools\Api\Models\Message\CustomerAddressAddedMessageModel;
use Commercetools\Api\Models\Message\CustomerAddressChangedMessage;
use Commercetools\Api\Models\Message\CustomerAddressChangedMessageModel;
use Commercetools\Api\Models\Message\CustomerAddressRemovedMessage;
use Commercetools\Api\Models\Message\CustomerAddressRemovedMessageModel;
use Commercetools\Api\Models\Message\CustomerCompanyNameSetMessage;
use Commercetools\Api\Models\Message\CustomerCompanyNameSetMessageModel;
use Commercetools\Api\Models\Message\CustomerCreatedMessage;
use Commercetools\Api\Models\Message\CustomerCreatedMessageModel;
use Commercetools\Api\Models\Message\CustomerDateOfBirthSetMessage;
use Commercetools\Api\Models\Message\CustomerDateOfBirthSetMessageModel;
use Commercetools\Api\Models\Message\CustomerDeletedMessage;
use Commercetools\Api\Models\Message\CustomerDeletedMessageModel;
use Commercetools\Api\Models\Message\CustomerEmailChangedMessage;
use Commercetools\Api\Models\Message\CustomerEmailChangedMessageModel;
use Commercetools\Api\Models\Message\CustomerEmailVerifiedMessage;
use Commercetools\Api\Models\Message\CustomerEmailVerifiedMessageModel;
use Commercetools\Api\Models\Message\CustomerFirstNameSetMessage;
use Commercetools\Api\Models\Message\CustomerFirstNameSetMessageModel;
use Commercetools\Api\Models\Message\CustomerGroupSetMessage;
use Commercetools\Api\Models\Message\CustomerGroupSetMessageModel;
use Commercetools\Api\Models\Message\CustomerLastNameSetMessage;
use Commercetools\Api\Models\Message\CustomerLastNameSetMessageModel;
use Commercetools\Api\Models\Message\CustomerPasswordUpdatedMessage;
use Commercetools\Api\Models\Message\CustomerPasswordUpdatedMessageModel;
use Commercetools\Api\Models\Message\CustomerTitleSetMessage;
use Commercetools\Api\Models\Message\CustomerTitleSetMessageModel;
use Commercetools\Api\Models\Message\InventoryEntryCreatedMessage;
use Commercetools\Api\Models\Message\InventoryEntryCreatedMessageModel;
use Commercetools\Api\Models\Message\InventoryEntryDeletedMessage;
use Commercetools\Api\Models\Message\InventoryEntryDeletedMessageModel;
use Commercetools\Api\Models\Message\InventoryEntryQuantitySetMessage;
use Commercetools\Api\Models\Message\InventoryEntryQuantitySetMessageModel;
use Commercetools\Api\Models\Message\Message;
use Commercetools\Api\Models\Message\MessageModel;
use Commercetools\Api\Models\Message\OrderMessage;
use Commercetools\Api\Models\Message\OrderMessageModel;
use Commercetools\Api\Models\Message\OrderPaymentAddedMessage;
use Commercetools\Api\Models\Message\OrderPaymentAddedMessageModel;
use Commercetools\Api\Models\Message\PaymentCreatedMessage;
use Commercetools\Api\Models\Message\PaymentCreatedMessageModel;
use Commercetools\Api\Models\Message\PaymentInteractionAddedMessage;
use Commercetools\Api\Models\Message\PaymentInteractionAddedMessageModel;
use Commercetools\Api\Models\Message\PaymentStatusInterfaceCodeSetMessage;
use Commercetools\Api\Models\Message\PaymentStatusInterfaceCodeSetMessageModel;
use Commercetools\Api\Models\Message\PaymentStatusStateTransitionMessage;
use Commercetools\Api\Models\Message\PaymentStatusStateTransitionMessageModel;
use Commercetools\Api\Models\Message\PaymentTransactionAddedMessage;
use Commercetools\Api\Models\Message\PaymentTransactionAddedMessageModel;
use Commercetools\Api\Models\Message\PaymentTransactionStateChangedMessage;
use Commercetools\Api\Models\Message\PaymentTransactionStateChangedMessageModel;
use Commercetools\Api\Models\Message\ProductAddedToCategoryMessage;
use Commercetools\Api\Models\Message\ProductAddedToCategoryMessageModel;
use Commercetools\Api\Models\Message\ProductCreatedMessage;
use Commercetools\Api\Models\Message\ProductCreatedMessageModel;
use Commercetools\Api\Models\Message\ProductDeletedMessage;
use Commercetools\Api\Models\Message\ProductDeletedMessageModel;
use Commercetools\Api\Models\Message\ProductImageAddedMessage;
use Commercetools\Api\Models\Message\ProductImageAddedMessageModel;
use Commercetools\Api\Models\Message\ProductPriceDiscountsSetMessage;
use Commercetools\Api\Models\Message\ProductPriceDiscountsSetMessageModel;
use Commercetools\Api\Models\Message\ProductPriceExternalDiscountSetMessage;
use Commercetools\Api\Models\Message\ProductPriceExternalDiscountSetMessageModel;
use Commercetools\Api\Models\Message\ProductPublishedMessage;
use Commercetools\Api\Models\Message\ProductPublishedMessageModel;
use Commercetools\Api\Models\Message\ProductRemovedFromCategoryMessage;
use Commercetools\Api\Models\Message\ProductRemovedFromCategoryMessageModel;
use Commercetools\Api\Models\Message\ProductRevertedStagedChangesMessage;
use Commercetools\Api\Models\Message\ProductRevertedStagedChangesMessageModel;
use Commercetools\Api\Models\Message\ProductSelectionCreatedMessage;
use Commercetools\Api\Models\Message\ProductSelectionCreatedMessageModel;
use Commercetools\Api\Models\Message\ProductSelectionDeletedMessage;
use Commercetools\Api\Models\Message\ProductSelectionDeletedMessageModel;
use Commercetools\Api\Models\Message\ProductSelectionProductAddedMessage;
use Commercetools\Api\Models\Message\ProductSelectionProductAddedMessageModel;
use Commercetools\Api\Models\Message\ProductSelectionProductRemovedMessage;
use Commercetools\Api\Models\Message\ProductSelectionProductRemovedMessageModel;
use Commercetools\Api\Models\Message\ProductSelectionVariantSelectionChangedMessage;
use Commercetools\Api\Models\Message\ProductSelectionVariantSelectionChangedMessageModel;
use Commercetools\Api\Models\Message\ProductSlugChangedMessage;
use Commercetools\Api\Models\Message\ProductSlugChangedMessageModel;
use Commercetools\Api\Models\Message\ProductStateTransitionMessage;
use Commercetools\Api\Models\Message\ProductStateTransitionMessageModel;
use Commercetools\Api\Models\Message\ProductUnpublishedMessage;
use Commercetools\Api\Models\Message\ProductUnpublishedMessageModel;
use Commercetools\Api\Models\Message\ProductVariantAddedMessage;
use Commercetools\Api\Models\Message\ProductVariantAddedMessageModel;
use Commercetools\Api\Models\Message\ProductVariantDeletedMessage;
use Commercetools\Api\Models\Message\ProductVariantDeletedMessageModel;
use Commercetools\Api\Models\Message\QuoteCreatedMessage;
use Commercetools\Api\Models\Message\QuoteCreatedMessageModel;
use Commercetools\Api\Models\Message\QuoteDeletedMessage;
use Commercetools\Api\Models\Message\QuoteDeletedMessageModel;
use Commercetools\Api\Models\Message\QuoteRequestCreatedMessage;
use Commercetools\Api\Models\Message\QuoteRequestCreatedMessageModel;
use Commercetools\Api\Models\Message\QuoteRequestDeletedMessage;
use Commercetools\Api\Models\Message\QuoteRequestDeletedMessageModel;
use Commercetools\Api\Models\Message\QuoteRequestStateChangedMessage;
use Commercetools\Api\Models\Message\QuoteRequestStateChangedMessageModel;
use Commercetools\Api\Models\Message\QuoteRequestStateTransitionMessage;
use Commercetools\Api\Models\Message\QuoteRequestStateTransitionMessageModel;
use Commercetools\Api\Models\Message\QuoteStateChangedMessage;
use Commercetools\Api\Models\Message\QuoteStateChangedMessageModel;
use Commercetools\Api\Models\Message\QuoteStateTransitionMessage;
use Commercetools\Api\Models\Message\QuoteStateTransitionMessageModel;
use Commercetools\Api\Models\Message\ReviewCreatedMessage;
use Commercetools\Api\Models\Message\ReviewCreatedMessageModel;
use Commercetools\Api\Models\Message\ReviewRatingSetMessage;
use Commercetools\Api\Models\Message\ReviewRatingSetMessageModel;
use Commercetools\Api\Models\Message\ReviewStateTransitionMessage;
use Commercetools\Api\Models\Message\ReviewStateTransitionMessageModel;
use Commercetools\Api\Models\Message\StagedQuoteCreatedMessage;
use Commercetools\Api\Models\Message\StagedQuoteCreatedMessageModel;
use Commercetools\Api\Models\Message\StagedQuoteDeletedMessage;
use Commercetools\Api\Models\Message\StagedQuoteDeletedMessageModel;
use Commercetools\Api\Models\Message\StagedQuoteSellerCommentSetMessage;
use Commercetools\Api\Models\Message\StagedQuoteSellerCommentSetMessageModel;
use Commercetools\Api\Models\Message\StagedQuoteStateChangedMessage;
use Commercetools\Api\Models\Message\StagedQuoteStateChangedMessageModel;
use Commercetools\Api\Models\Message\StagedQuoteStateTransitionMessage;
use Commercetools\Api\Models\Message\StagedQuoteStateTransitionMessageModel;
use Commercetools\Api\Models\Message\StagedQuoteValidToSetMessage;
use Commercetools\Api\Models\Message\StagedQuoteValidToSetMessageModel;
use Commercetools\Api\Models\Message\StandalonePriceActiveChangedMessage;
use Commercetools\Api\Models\Message\StandalonePriceActiveChangedMessageModel;
use Commercetools\Api\Models\Message\StandalonePriceCreatedMessage;
use Commercetools\Api\Models\Message\StandalonePriceCreatedMessageModel;
use Commercetools\Api\Models\Message\StandalonePriceDeletedMessage;
use Commercetools\Api\Models\Message\StandalonePriceDeletedMessageModel;
use Commercetools\Api\Models\Message\StandalonePriceDiscountSetMessage;
use Commercetools\Api\Models\Message\StandalonePriceDiscountSetMessageModel;
use Commercetools\Api\Models\Message\StandalonePriceExternalDiscountSetMessage;
use Commercetools\Api\Models\Message\StandalonePriceExternalDiscountSetMessageModel;
use Commercetools\Api\Models\Message\StandalonePriceStagedChangesAppliedMessage;
use Commercetools\Api\Models\Message\StandalonePriceStagedChangesAppliedMessageModel;
use Commercetools\Api\Models\Message\StandalonePriceValueChangedMessage;
use Commercetools\Api\Models\Message\StandalonePriceValueChangedMessageModel;
use Commercetools\Api\Models\Message\StoreCreatedMessage;
use Commercetools\Api\Models\Message\StoreCreatedMessageModel;
use Commercetools\Api\Models\Message\StoreDeletedMessage;
use Commercetools\Api\Models\Message\StoreDeletedMessageModel;
use Commercetools\Api\Models\Message\StoreDistributionChannelsChangedMessage;
use Commercetools\Api\Models\Message\StoreDistributionChannelsChangedMessageModel;
use Commercetools\Api\Models\Message\StoreLanguagesChangedMessage;
use Commercetools\Api\Models\Message\StoreLanguagesChangedMessageModel;
use Commercetools\Api\Models\Message\StoreNameSetMessage;
use Commercetools\Api\Models\Message\StoreNameSetMessageModel;
use Commercetools\Api\Models\Message\StoreProductSelectionsChangedMessage;
use Commercetools\Api\Models\Message\StoreProductSelectionsChangedMessageModel;
use Commercetools\Api\Models\Message\StoreSupplyChannelsChangedMessage;
use Commercetools\Api\Models\Message\StoreSupplyChannelsChangedMessageModel;
use Commercetools\Api\Models\Order\Order;
use Commercetools\Api\Models\Order\OrderModel;
use Commercetools\Api\Models\OrderEdit\OrderEdit;
use Commercetools\Api\Models\OrderEdit\OrderEditModel;
use Commercetools\Api\Models\OrderEdit\StagedOrder;
use Commercetools\Api\Models\OrderEdit\StagedOrderModel;
use Commercetools\Api\Models\Payment\Payment;
use Commercetools\Api\Models\Payment\PaymentModel;
use Commercetools\Api\Models\Product\Product;
use Commercetools\Api\Models\Product\ProductModel;
use Commercetools\Api\Models\Product\ProductProjection;
use Commercetools\Api\Models\Product\ProductProjectionModel;
use Commercetools\Api\Models\ProductDiscount\ProductDiscount;
use Commercetools\Api\Models\ProductDiscount\ProductDiscountModel;
use Commercetools\Api\Models\ProductSelection\ProductSelection;
use Commercetools\Api\Models\ProductSelection\ProductSelectionModel;
use Commercetools\Api\Models\ProductType\ProductType;
use Commercetools\Api\Models\ProductType\ProductTypeModel;
use Commercetools\Api\Models\Quote\Quote;
use Commercetools\Api\Models\Quote\QuoteModel;
use Commercetools\Api\Models\QuoteRequest\QuoteRequest;
use Commercetools\Api\Models\QuoteRequest\QuoteRequestModel;
use Commercetools\Api\Models\Review\Review;
use Commercetools\Api\Models\Review\ReviewModel;
use Commercetools\Api\Models\ShippingMethod\ShippingMethod;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodModel;
use Commercetools\Api\Models\ShoppingList\ShoppingList;
use Commercetools\Api\Models\ShoppingList\ShoppingListModel;
use Commercetools\Api\Models\StagedQuote\StagedQuote;
use Commercetools\Api\Models\StagedQuote\StagedQuoteModel;
use Commercetools\Api\Models\StandalonePrice\StandalonePrice;
use Commercetools\Api\Models\StandalonePrice\StandalonePriceModel;
use Commercetools\Api\Models\State\State;
use Commercetools\Api\Models\State\StateModel;
use Commercetools\Api\Models\Store\Store;
use Commercetools\Api\Models\Store\StoreModel;
use Commercetools\Api\Models\Subscription\Subscription;
use Commercetools\Api\Models\Subscription\SubscriptionModel;
use Commercetools\Api\Models\TaxCategory\TaxCategory;
use Commercetools\Api\Models\TaxCategory\TaxCategoryModel;
use Commercetools\Api\Models\Type\Type;
use Commercetools\Api\Models\Type\TypeModel;
use Commercetools\Api\Models\Zone\Zone;
use Commercetools\Api\Models\Zone\ZoneModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class BaseResourceModel extends JsonObjectModel implements BaseResource
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
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?int $version = null,
        ?DateTimeImmutable $createdAt = null,
        ?DateTimeImmutable $lastModifiedAt = null
    ) {
        $this->id = $id;
        $this->version = $version;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
    }

    /**
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


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[BaseResource::FIELD_CREATED_AT]) && $data[BaseResource::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[BaseResource::FIELD_CREATED_AT] = $data[BaseResource::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[BaseResource::FIELD_LAST_MODIFIED_AT]) && $data[BaseResource::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[BaseResource::FIELD_LAST_MODIFIED_AT] = $data[BaseResource::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
