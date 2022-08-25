<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Cart\Cart;
use Commercetools\Api\Models\Cart\CartBuilder;
use Commercetools\Api\Models\CartDiscount\CartDiscount;
use Commercetools\Api\Models\CartDiscount\CartDiscountBuilder;
use Commercetools\Api\Models\Category\Category;
use Commercetools\Api\Models\Category\CategoryBuilder;
use Commercetools\Api\Models\Channel\Channel;
use Commercetools\Api\Models\Channel\ChannelBuilder;
use Commercetools\Api\Models\Customer\Customer;
use Commercetools\Api\Models\Customer\CustomerBuilder;
use Commercetools\Api\Models\CustomerGroup\CustomerGroup;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupBuilder;
use Commercetools\Api\Models\CustomObject\CustomObject;
use Commercetools\Api\Models\CustomObject\CustomObjectBuilder;
use Commercetools\Api\Models\DiscountCode\DiscountCode;
use Commercetools\Api\Models\DiscountCode\DiscountCodeBuilder;
use Commercetools\Api\Models\Extension\Extension;
use Commercetools\Api\Models\Extension\ExtensionBuilder;
use Commercetools\Api\Models\Inventory\InventoryEntry;
use Commercetools\Api\Models\Inventory\InventoryEntryBuilder;
use Commercetools\Api\Models\Message\CategoryCreatedMessage;
use Commercetools\Api\Models\Message\CategoryCreatedMessageBuilder;
use Commercetools\Api\Models\Message\CategorySlugChangedMessage;
use Commercetools\Api\Models\Message\CategorySlugChangedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerAddressAddedMessage;
use Commercetools\Api\Models\Message\CustomerAddressAddedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerAddressChangedMessage;
use Commercetools\Api\Models\Message\CustomerAddressChangedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerAddressRemovedMessage;
use Commercetools\Api\Models\Message\CustomerAddressRemovedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerCompanyNameSetMessage;
use Commercetools\Api\Models\Message\CustomerCompanyNameSetMessageBuilder;
use Commercetools\Api\Models\Message\CustomerCreatedMessage;
use Commercetools\Api\Models\Message\CustomerCreatedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerDateOfBirthSetMessage;
use Commercetools\Api\Models\Message\CustomerDateOfBirthSetMessageBuilder;
use Commercetools\Api\Models\Message\CustomerDeletedMessage;
use Commercetools\Api\Models\Message\CustomerDeletedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerEmailChangedMessage;
use Commercetools\Api\Models\Message\CustomerEmailChangedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerEmailVerifiedMessage;
use Commercetools\Api\Models\Message\CustomerEmailVerifiedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerFirstNameSetMessage;
use Commercetools\Api\Models\Message\CustomerFirstNameSetMessageBuilder;
use Commercetools\Api\Models\Message\CustomerGroupSetMessage;
use Commercetools\Api\Models\Message\CustomerGroupSetMessageBuilder;
use Commercetools\Api\Models\Message\CustomerLastNameSetMessage;
use Commercetools\Api\Models\Message\CustomerLastNameSetMessageBuilder;
use Commercetools\Api\Models\Message\CustomerPasswordUpdatedMessage;
use Commercetools\Api\Models\Message\CustomerPasswordUpdatedMessageBuilder;
use Commercetools\Api\Models\Message\CustomerTitleSetMessage;
use Commercetools\Api\Models\Message\CustomerTitleSetMessageBuilder;
use Commercetools\Api\Models\Message\InventoryEntryCreatedMessage;
use Commercetools\Api\Models\Message\InventoryEntryCreatedMessageBuilder;
use Commercetools\Api\Models\Message\InventoryEntryDeletedMessage;
use Commercetools\Api\Models\Message\InventoryEntryDeletedMessageBuilder;
use Commercetools\Api\Models\Message\InventoryEntryQuantitySetMessage;
use Commercetools\Api\Models\Message\InventoryEntryQuantitySetMessageBuilder;
use Commercetools\Api\Models\Message\Message;
use Commercetools\Api\Models\Message\MessageBuilder;
use Commercetools\Api\Models\Message\OrderMessage;
use Commercetools\Api\Models\Message\OrderMessageBuilder;
use Commercetools\Api\Models\Message\OrderPaymentAddedMessage;
use Commercetools\Api\Models\Message\OrderPaymentAddedMessageBuilder;
use Commercetools\Api\Models\Message\PaymentCreatedMessage;
use Commercetools\Api\Models\Message\PaymentCreatedMessageBuilder;
use Commercetools\Api\Models\Message\PaymentInteractionAddedMessage;
use Commercetools\Api\Models\Message\PaymentInteractionAddedMessageBuilder;
use Commercetools\Api\Models\Message\PaymentStatusInterfaceCodeSetMessage;
use Commercetools\Api\Models\Message\PaymentStatusInterfaceCodeSetMessageBuilder;
use Commercetools\Api\Models\Message\PaymentStatusStateTransitionMessage;
use Commercetools\Api\Models\Message\PaymentStatusStateTransitionMessageBuilder;
use Commercetools\Api\Models\Message\PaymentTransactionAddedMessage;
use Commercetools\Api\Models\Message\PaymentTransactionAddedMessageBuilder;
use Commercetools\Api\Models\Message\PaymentTransactionStateChangedMessage;
use Commercetools\Api\Models\Message\PaymentTransactionStateChangedMessageBuilder;
use Commercetools\Api\Models\Message\ProductAddedToCategoryMessage;
use Commercetools\Api\Models\Message\ProductAddedToCategoryMessageBuilder;
use Commercetools\Api\Models\Message\ProductCreatedMessage;
use Commercetools\Api\Models\Message\ProductCreatedMessageBuilder;
use Commercetools\Api\Models\Message\ProductDeletedMessage;
use Commercetools\Api\Models\Message\ProductDeletedMessageBuilder;
use Commercetools\Api\Models\Message\ProductImageAddedMessage;
use Commercetools\Api\Models\Message\ProductImageAddedMessageBuilder;
use Commercetools\Api\Models\Message\ProductPriceDiscountsSetMessage;
use Commercetools\Api\Models\Message\ProductPriceDiscountsSetMessageBuilder;
use Commercetools\Api\Models\Message\ProductPriceExternalDiscountSetMessage;
use Commercetools\Api\Models\Message\ProductPriceExternalDiscountSetMessageBuilder;
use Commercetools\Api\Models\Message\ProductPublishedMessage;
use Commercetools\Api\Models\Message\ProductPublishedMessageBuilder;
use Commercetools\Api\Models\Message\ProductRemovedFromCategoryMessage;
use Commercetools\Api\Models\Message\ProductRemovedFromCategoryMessageBuilder;
use Commercetools\Api\Models\Message\ProductRevertedStagedChangesMessage;
use Commercetools\Api\Models\Message\ProductRevertedStagedChangesMessageBuilder;
use Commercetools\Api\Models\Message\ProductSelectionCreatedMessage;
use Commercetools\Api\Models\Message\ProductSelectionCreatedMessageBuilder;
use Commercetools\Api\Models\Message\ProductSelectionDeletedMessage;
use Commercetools\Api\Models\Message\ProductSelectionDeletedMessageBuilder;
use Commercetools\Api\Models\Message\ProductSelectionProductAddedMessage;
use Commercetools\Api\Models\Message\ProductSelectionProductAddedMessageBuilder;
use Commercetools\Api\Models\Message\ProductSelectionProductRemovedMessage;
use Commercetools\Api\Models\Message\ProductSelectionProductRemovedMessageBuilder;
use Commercetools\Api\Models\Message\ProductSelectionVariantSelectionChangedMessage;
use Commercetools\Api\Models\Message\ProductSelectionVariantSelectionChangedMessageBuilder;
use Commercetools\Api\Models\Message\ProductSlugChangedMessage;
use Commercetools\Api\Models\Message\ProductSlugChangedMessageBuilder;
use Commercetools\Api\Models\Message\ProductStateTransitionMessage;
use Commercetools\Api\Models\Message\ProductStateTransitionMessageBuilder;
use Commercetools\Api\Models\Message\ProductUnpublishedMessage;
use Commercetools\Api\Models\Message\ProductUnpublishedMessageBuilder;
use Commercetools\Api\Models\Message\ProductVariantAddedMessage;
use Commercetools\Api\Models\Message\ProductVariantAddedMessageBuilder;
use Commercetools\Api\Models\Message\ProductVariantDeletedMessage;
use Commercetools\Api\Models\Message\ProductVariantDeletedMessageBuilder;
use Commercetools\Api\Models\Message\QuoteCreatedMessage;
use Commercetools\Api\Models\Message\QuoteCreatedMessageBuilder;
use Commercetools\Api\Models\Message\QuoteDeletedMessage;
use Commercetools\Api\Models\Message\QuoteDeletedMessageBuilder;
use Commercetools\Api\Models\Message\QuoteRequestCreatedMessage;
use Commercetools\Api\Models\Message\QuoteRequestCreatedMessageBuilder;
use Commercetools\Api\Models\Message\QuoteRequestDeletedMessage;
use Commercetools\Api\Models\Message\QuoteRequestDeletedMessageBuilder;
use Commercetools\Api\Models\Message\QuoteRequestStateChangedMessage;
use Commercetools\Api\Models\Message\QuoteRequestStateChangedMessageBuilder;
use Commercetools\Api\Models\Message\QuoteRequestStateTransitionMessage;
use Commercetools\Api\Models\Message\QuoteRequestStateTransitionMessageBuilder;
use Commercetools\Api\Models\Message\QuoteStateChangedMessage;
use Commercetools\Api\Models\Message\QuoteStateChangedMessageBuilder;
use Commercetools\Api\Models\Message\QuoteStateTransitionMessage;
use Commercetools\Api\Models\Message\QuoteStateTransitionMessageBuilder;
use Commercetools\Api\Models\Message\ReviewCreatedMessage;
use Commercetools\Api\Models\Message\ReviewCreatedMessageBuilder;
use Commercetools\Api\Models\Message\ReviewRatingSetMessage;
use Commercetools\Api\Models\Message\ReviewRatingSetMessageBuilder;
use Commercetools\Api\Models\Message\ReviewStateTransitionMessage;
use Commercetools\Api\Models\Message\ReviewStateTransitionMessageBuilder;
use Commercetools\Api\Models\Message\StagedQuoteCreatedMessage;
use Commercetools\Api\Models\Message\StagedQuoteCreatedMessageBuilder;
use Commercetools\Api\Models\Message\StagedQuoteDeletedMessage;
use Commercetools\Api\Models\Message\StagedQuoteDeletedMessageBuilder;
use Commercetools\Api\Models\Message\StagedQuoteSellerCommentSetMessage;
use Commercetools\Api\Models\Message\StagedQuoteSellerCommentSetMessageBuilder;
use Commercetools\Api\Models\Message\StagedQuoteStateChangedMessage;
use Commercetools\Api\Models\Message\StagedQuoteStateChangedMessageBuilder;
use Commercetools\Api\Models\Message\StagedQuoteStateTransitionMessage;
use Commercetools\Api\Models\Message\StagedQuoteStateTransitionMessageBuilder;
use Commercetools\Api\Models\Message\StagedQuoteValidToSetMessage;
use Commercetools\Api\Models\Message\StagedQuoteValidToSetMessageBuilder;
use Commercetools\Api\Models\Message\StandalonePriceCreatedMessage;
use Commercetools\Api\Models\Message\StandalonePriceCreatedMessageBuilder;
use Commercetools\Api\Models\Message\StandalonePriceDeletedMessage;
use Commercetools\Api\Models\Message\StandalonePriceDeletedMessageBuilder;
use Commercetools\Api\Models\Message\StandalonePriceDiscountSetMessage;
use Commercetools\Api\Models\Message\StandalonePriceDiscountSetMessageBuilder;
use Commercetools\Api\Models\Message\StandalonePriceExternalDiscountSetMessage;
use Commercetools\Api\Models\Message\StandalonePriceExternalDiscountSetMessageBuilder;
use Commercetools\Api\Models\Message\StandalonePriceStagedChangesAppliedMessage;
use Commercetools\Api\Models\Message\StandalonePriceStagedChangesAppliedMessageBuilder;
use Commercetools\Api\Models\Message\StandalonePriceValueChangedMessage;
use Commercetools\Api\Models\Message\StandalonePriceValueChangedMessageBuilder;
use Commercetools\Api\Models\Message\StoreCreatedMessage;
use Commercetools\Api\Models\Message\StoreCreatedMessageBuilder;
use Commercetools\Api\Models\Message\StoreDeletedMessage;
use Commercetools\Api\Models\Message\StoreDeletedMessageBuilder;
use Commercetools\Api\Models\Message\StoreDistributionChannelsChangedMessage;
use Commercetools\Api\Models\Message\StoreDistributionChannelsChangedMessageBuilder;
use Commercetools\Api\Models\Message\StoreLanguagesChangedMessage;
use Commercetools\Api\Models\Message\StoreLanguagesChangedMessageBuilder;
use Commercetools\Api\Models\Message\StoreProductSelectionsChangedMessage;
use Commercetools\Api\Models\Message\StoreProductSelectionsChangedMessageBuilder;
use Commercetools\Api\Models\Order\Order;
use Commercetools\Api\Models\Order\OrderBuilder;
use Commercetools\Api\Models\OrderEdit\OrderEdit;
use Commercetools\Api\Models\OrderEdit\OrderEditBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrder;
use Commercetools\Api\Models\OrderEdit\StagedOrderBuilder;
use Commercetools\Api\Models\Payment\Payment;
use Commercetools\Api\Models\Payment\PaymentBuilder;
use Commercetools\Api\Models\Product\Product;
use Commercetools\Api\Models\Product\ProductBuilder;
use Commercetools\Api\Models\Product\ProductProjection;
use Commercetools\Api\Models\Product\ProductProjectionBuilder;
use Commercetools\Api\Models\ProductDiscount\ProductDiscount;
use Commercetools\Api\Models\ProductDiscount\ProductDiscountBuilder;
use Commercetools\Api\Models\ProductSelection\ProductSelection;
use Commercetools\Api\Models\ProductSelection\ProductSelectionBuilder;
use Commercetools\Api\Models\ProductType\ProductType;
use Commercetools\Api\Models\ProductType\ProductTypeBuilder;
use Commercetools\Api\Models\Quote\Quote;
use Commercetools\Api\Models\Quote\QuoteBuilder;
use Commercetools\Api\Models\QuoteRequest\QuoteRequest;
use Commercetools\Api\Models\QuoteRequest\QuoteRequestBuilder;
use Commercetools\Api\Models\Review\Review;
use Commercetools\Api\Models\Review\ReviewBuilder;
use Commercetools\Api\Models\ShippingMethod\ShippingMethod;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodBuilder;
use Commercetools\Api\Models\ShoppingList\ShoppingList;
use Commercetools\Api\Models\ShoppingList\ShoppingListBuilder;
use Commercetools\Api\Models\StagedQuote\StagedQuote;
use Commercetools\Api\Models\StagedQuote\StagedQuoteBuilder;
use Commercetools\Api\Models\StandalonePrice\StandalonePrice;
use Commercetools\Api\Models\StandalonePrice\StandalonePriceBuilder;
use Commercetools\Api\Models\State\State;
use Commercetools\Api\Models\State\StateBuilder;
use Commercetools\Api\Models\Store\Store;
use Commercetools\Api\Models\Store\StoreBuilder;
use Commercetools\Api\Models\Subscription\Subscription;
use Commercetools\Api\Models\Subscription\SubscriptionBuilder;
use Commercetools\Api\Models\TaxCategory\TaxCategory;
use Commercetools\Api\Models\TaxCategory\TaxCategoryBuilder;
use Commercetools\Api\Models\Type\Type;
use Commercetools\Api\Models\Type\TypeBuilder;
use Commercetools\Api\Models\Zone\Zone;
use Commercetools\Api\Models\Zone\ZoneBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<BaseResource>
 */
final class BaseResourceBuilder implements Builder
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

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
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


    public function build(): BaseResource
    {
        return new BaseResourceModel(
            $this->id,
            $this->version,
            $this->createdAt,
            $this->lastModifiedAt
        );
    }

    public static function of(): BaseResourceBuilder
    {
        return new self();
    }
}
