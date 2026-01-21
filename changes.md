**Api changes**

<details>
<summary>Added Type(s)</summary>

- added type `BusinessUnitAssociateResponse`
- added type `BusinessUnitAddCustomerGroupAssignmentAction`
- added type `BusinessUnitRemoveCustomerGroupAssignmentAction`
- added type `BusinessUnitSetCustomerGroupAssignmentsAction`
- added type `BusinessUnitSetUnitTypeAction`
- added type `CartDiscountSetDiscountGroupAction`
- added type `BestDeal`
- added type `CartLock`
- added type `CartMergeMode`
- added type `DiscountTypeCombination`
- added type `FreezeStrategy`
- added type `MergeCartDraft`
- added type `Stacking`
- added type `CartChangePriceRoundingModeAction`
- added type `CartLockCartAction`
- added type `CartSetCustomLineItemRecurrenceInfoAction`
- added type `CartSetLineItemRecurrenceInfoAction`
- added type `CartSetPurchaseOrderNumberAction`
- added type `CartUnlockCartAction`
- added type `AddressRole`
- added type `CustomerGroupAssignment`
- added type `CustomerGroupAssignmentDraft`
- added type `CustomerAddCustomerGroupAssignmentAction`
- added type `CustomerRemoveCustomerGroupAssignmentAction`
- added type `CustomerSetCustomerGroupAssignmentsAction`
- added type `DiscountGroup`
- added type `DiscountGroupDraft`
- added type `DiscountGroupPagedQueryResponse`
- added type `DiscountGroupReference`
- added type `DiscountGroupResourceIdentifier`
- added type `DiscountGroupUpdate`
- added type `DiscountGroupUpdateAction`
- added type `DiscountGroupSetDescriptionAction`
- added type `DiscountGroupSetIsActiveAction`
- added type `DiscountGroupSetKeyAction`
- added type `DiscountGroupSetNameAction`
- added type `DiscountGroupSetSortOrderAction`
- added type `ExpiredCustomerEmailTokenError`
- added type `ExpiredCustomerPasswordTokenError`
- added type `MaxDiscountGroupsReachedError`
- added type `RecurringOrderFailureError`
- added type `GraphQLExpiredCustomerEmailTokenError`
- added type `GraphQLExpiredCustomerPasswordTokenError`
- added type `GraphQLMaxDiscountGroupsReachedError`
- added type `GraphQLRecurringOrderFailureError`
- added type `BaseEvent`
- added type `CheckoutOrderCreationFailedEvent`
- added type `CheckoutPaymentAuthorizationCancelledEvent`
- added type `CheckoutPaymentAuthorizationFailedEvent`
- added type `CheckoutPaymentAuthorizedEvent`
- added type `CheckoutPaymentCancelAuthorizationFailedEvent`
- added type `CheckoutPaymentChargeFailedEvent`
- added type `CheckoutPaymentChargedEvent`
- added type `CheckoutPaymentRefundFailedEvent`
- added type `CheckoutPaymentRefundedEvent`
- added type `Event`
- added type `ImportContainerCreatedEvent`
- added type `ImportContainerDeletedEvent`
- added type `ImportOperationRejectedEvent`
- added type `ImportUnresolvedEvent`
- added type `ImportValidationFailedEvent`
- added type `ImportWaitForMasterVariantEvent`
- added type `CheckoutMessageOrderPayloadBaseData`
- added type `CheckoutMessagePaymentsPayloadBaseData`
- added type `ImportContainerCreatedEventData`
- added type `ImportContainerDeletedEventData`
- added type `ImportOperationRejectedEventData`
- added type `ImportUnresolvedEventData`
- added type `ImportValidationFailedEventData`
- added type `ImportWaitForMasterVariantEventData`
- added type `InventoryEntrySetInventoryLimitsAction`
- added type `MyPaymentSetMethodInfoCustomFieldAction`
- added type `MyPaymentSetMethodInfoCustomTypeAction`
- added type `MyPaymentSetMethodInfoInterfaceAccountAction`
- added type `AssociateRoleNameSetMessage`
- added type `BusinessUnitCustomerGroupAssignmentAddedMessage`
- added type `BusinessUnitCustomerGroupAssignmentRemovedMessage`
- added type `BusinessUnitCustomerGroupAssignmentsSetMessage`
- added type `BusinessUnitTopLevelUnitSetMessage`
- added type `BusinessUnitTypeSetMessage`
- added type `CartFrozenMessage`
- added type `CartPurchaseOrderNumberSetMessage`
- added type `CartUnfrozenMessage`
- added type `CustomerBillingAddressAddedMessage`
- added type `CustomerBillingAddressRemovedMessage`
- added type `CustomerDefaultBillingAddressSetMessage`
- added type `CustomerDefaultShippingAddressSetMessage`
- added type `CustomerExternalIdSetMessage`
- added type `CustomerGroupAssignmentAddedMessage`
- added type `CustomerGroupAssignmentRemovedMessage`
- added type `CustomerGroupAssignmentsSetMessage`
- added type `CustomerShippingAddressAddedMessage`
- added type `CustomerShippingAddressRemovedMessage`
- added type `CustomerStoresSetMessage`
- added type `DiscountGroupCreatedMessage`
- added type `DiscountGroupDeletedMessage`
- added type `DiscountGroupIsActiveSetMessage`
- added type `DiscountGroupKeySetMessage`
- added type `DiscountGroupSortOrderSetMessage`
- added type `OrderBusinessUnitSetMessage`
- added type `OrderCreatedFromRecurringOrderMessage`
- added type `OrderPaymentRemovedMessage`
- added type `PaymentInterfaceIdSetMessage`
- added type `PaymentMethodCreatedMessage`
- added type `PaymentMethodCustomFieldAddedMessage`
- added type `PaymentMethodCustomFieldChangedMessage`
- added type `PaymentMethodCustomFieldRemovedMessage`
- added type `PaymentMethodCustomTypeRemovedMessage`
- added type `PaymentMethodCustomTypeSetMessage`
- added type `PaymentMethodDefaultSetMessage`
- added type `PaymentMethodDeletedMessage`
- added type `PaymentMethodInfoCustomFieldAddedMessage`
- added type `PaymentMethodInfoCustomFieldChangedMessage`
- added type `PaymentMethodInfoCustomFieldRemovedMessage`
- added type `PaymentMethodInfoCustomTypeRemovedMessage`
- added type `PaymentMethodInfoCustomTypeSetMessage`
- added type `PaymentMethodInfoInterfaceAccountSetMessage`
- added type `PaymentMethodInfoInterfaceSetMessage`
- added type `PaymentMethodInfoMethodSetMessage`
- added type `PaymentMethodInfoNameSetMessage`
- added type `PaymentMethodInfoTokenSetMessage`
- added type `PaymentMethodInterfaceAccountSetMessage`
- added type `PaymentMethodKeySetMessage`
- added type `PaymentMethodMethodSetMessage`
- added type `PaymentMethodNameSetMessage`
- added type `PaymentMethodPaymentInterfaceSetMessage`
- added type `PaymentMethodPaymentMethodStatusSetMessage`
- added type `PaymentTransactionInterfaceIdSetMessage`
- added type `RecurringOrderCreatedMessage`
- added type `RecurringOrderCustomFieldAddedMessage`
- added type `RecurringOrderCustomFieldChangedMessage`
- added type `RecurringOrderCustomFieldRemovedMessage`
- added type `RecurringOrderCustomTypeRemovedMessage`
- added type `RecurringOrderCustomTypeSetMessage`
- added type `RecurringOrderDeletedMessage`
- added type `RecurringOrderExpiresAtSetMessage`
- added type `RecurringOrderFailedMessage`
- added type `RecurringOrderKeySetMessage`
- added type `RecurringOrderScheduleSetMessage`
- added type `RecurringOrderStartsAtSetMessage`
- added type `RecurringOrderStateChangedMessage`
- added type `RecurringOrderStateTransitionMessage`
- added type `AssociateRoleNameSetMessagePayload`
- added type `BusinessUnitCustomerGroupAssignmentAddedMessagePayload`
- added type `BusinessUnitCustomerGroupAssignmentRemovedMessagePayload`
- added type `BusinessUnitCustomerGroupAssignmentsSetMessagePayload`
- added type `BusinessUnitTopLevelUnitSetMessagePayload`
- added type `BusinessUnitTypeSetMessagePayload`
- added type `CartFrozenMessagePayload`
- added type `CartPurchaseOrderNumberSetMessagePayload`
- added type `CartUnfrozenMessagePayload`
- added type `CustomerBillingAddressAddedMessagePayload`
- added type `CustomerBillingAddressRemovedMessagePayload`
- added type `CustomerDefaultBillingAddressSetMessagePayload`
- added type `CustomerDefaultShippingAddressSetMessagePayload`
- added type `CustomerExternalIdSetMessagePayload`
- added type `CustomerGroupAssignmentAddedMessagePayload`
- added type `CustomerGroupAssignmentRemovedMessagePayload`
- added type `CustomerGroupAssignmentsSetMessagePayload`
- added type `CustomerShippingAddressAddedMessagePayload`
- added type `CustomerShippingAddressRemovedMessagePayload`
- added type `CustomerStoresSetMessagePayload`
- added type `DiscountGroupCreatedMessagePayload`
- added type `DiscountGroupDeletedMessagePayload`
- added type `DiscountGroupIsActiveSetMessagePayload`
- added type `DiscountGroupKeySetMessagePayload`
- added type `DiscountGroupSortOrderSetMessagePayload`
- added type `OrderBusinessUnitSetMessagePayload`
- added type `OrderCreatedFromRecurringOrderMessagePayload`
- added type `OrderPaymentRemovedMessagePayload`
- added type `PaymentInterfaceIdSetMessagePayload`
- added type `PaymentMethodCreatedMessagePayload`
- added type `PaymentMethodCustomFieldAddedMessagePayload`
- added type `PaymentMethodCustomFieldChangedMessagePayload`
- added type `PaymentMethodCustomFieldRemovedMessagePayload`
- added type `PaymentMethodCustomTypeRemovedMessagePayload`
- added type `PaymentMethodCustomTypeSetMessagePayload`
- added type `PaymentMethodDefaultSetMessagePayload`
- added type `PaymentMethodDeletedMessagePayload`
- added type `PaymentMethodInfoCustomFieldAddedMessagePayload`
- added type `PaymentMethodInfoCustomFieldChangedMessagePayload`
- added type `PaymentMethodInfoCustomFieldRemovedMessagePayload`
- added type `PaymentMethodInfoCustomTypeRemovedMessagePayload`
- added type `PaymentMethodInfoCustomTypeSetMessagePayload`
- added type `PaymentMethodInfoInterfaceAccountSetMessagePayload`
- added type `PaymentMethodInfoInterfaceSetMessagePayload`
- added type `PaymentMethodInfoMethodSetMessagePayload`
- added type `PaymentMethodInfoNameSetMessagePayload`
- added type `PaymentMethodInfoTokenSetMessagePayload`
- added type `PaymentMethodInterfaceAccountSetMessagePayload`
- added type `PaymentMethodKeySetMessagePayload`
- added type `PaymentMethodMethodSetMessagePayload`
- added type `PaymentMethodNameSetMessagePayload`
- added type `PaymentMethodPaymentInterfaceSetMessagePayload`
- added type `PaymentMethodPaymentMethodStatusSetMessagePayload`
- added type `PaymentTransactionInterfaceIdSetMessagePayload`
- added type `RecurringOrderCreatedMessagePayload`
- added type `RecurringOrderCustomFieldAddedMessagePayload`
- added type `RecurringOrderCustomFieldChangedMessagePayload`
- added type `RecurringOrderCustomFieldRemovedMessagePayload`
- added type `RecurringOrderCustomTypeRemovedMessagePayload`
- added type `RecurringOrderCustomTypeSetMessagePayload`
- added type `RecurringOrderDeletedMessagePayload`
- added type `RecurringOrderExpiresAtSetMessagePayload`
- added type `RecurringOrderFailedMessagePayload`
- added type `RecurringOrderKeySetMessagePayload`
- added type `RecurringOrderScheduleSetMessagePayload`
- added type `RecurringOrderStartsAtSetMessagePayload`
- added type `RecurringOrderStateChangedMessagePayload`
- added type `RecurringOrderStateTransitionMessagePayload`
- added type `StagedOrderChangePriceRoundingModeAction`
- added type `StagedOrderSetBusinessUnitAction`
- added type `OrderSetBusinessUnitAction`
- added type `PaymentMethod`
- added type `PaymentMethodDraft`
- added type `PaymentMethodPagedQueryResponse`
- added type `PaymentMethodReference`
- added type `PaymentMethodStatus`
- added type `PaymentMethodToken`
- added type `PaymentMethodUpdate`
- added type `PaymentMethodUpdateAction`
- added type `PaymentMethodSetCustomFieldAction`
- added type `PaymentMethodSetCustomTypeAction`
- added type `PaymentMethodSetDefaultAction`
- added type `PaymentMethodSetInterfaceAccountAction`
- added type `PaymentMethodSetKeyAction`
- added type `PaymentMethodSetMethodAction`
- added type `PaymentMethodSetNameAction`
- added type `PaymentMethodSetPaymentInterfaceAction`
- added type `PaymentMethodSetPaymentMethodStatusAction`
- added type `PaymentMethodInfoDraft`
- added type `PaymentSetMethodInfoAction`
- added type `PaymentSetMethodInfoCustomFieldAction`
- added type `PaymentSetMethodInfoCustomTypeAction`
- added type `PaymentSetMethodInfoInterfaceAccountAction`
- added type `PaymentSetMethodInfoTokenAction`
- added type `PaymentSetTransactionInterfaceIdAction`
- added type `ProductSearchFacetResultStats`
- added type `ProductSearchFacetStatsExpression`
- added type `ProductSearchFacetStatsValue`
- added type `ProductTailoringSetProductAttributeAction`
- added type `AttributeLevelEnum`
- added type `ProductSetProductAttributeAction`
- added type `DiscountCombinationMode`
- added type `DiscountsConfiguration`
- added type `ProjectChangePriceRoundingModeAction`
- added type `ProjectChangeTaxRoundingModeAction`
- added type `ProjectSetDiscountsConfigurationAction`
- added type `DayOfMonthSchedule`
- added type `DayOfMonthScheduleDraft`
- added type `IntervalUnit`
- added type `RecurrencePolicy`
- added type `RecurrencePolicyDraft`
- added type `RecurrencePolicyPagedQueryResponse`
- added type `RecurrencePolicyReference`
- added type `RecurrencePolicyResourceIdentifier`
- added type `RecurrencePolicySchedule`
- added type `RecurrencePolicyScheduleDraft`
- added type `RecurrencePolicyUpdate`
- added type `RecurrencePolicyUpdateAction`
- added type `StandardSchedule`
- added type `StandardScheduleDraft`
- added type `RecurrencePolicySetDescriptionAction`
- added type `RecurrencePolicySetKeyAction`
- added type `RecurrencePolicySetNameAction`
- added type `RecurrencePolicySetScheduleAction`
- added type `Counter`
- added type `CounterDraft`
- added type `CustomLineItemRecurrenceInfo`
- added type `CustomLineItemRecurrenceInfoDraft`
- added type `LineItemRecurrenceInfo`
- added type `LineItemRecurrenceInfoDraft`
- added type `PriceSelectionMode`
- added type `RecurringOrder`
- added type `RecurringOrderActive`
- added type `RecurringOrderCanceled`
- added type `RecurringOrderDraft`
- added type `RecurringOrderExpired`
- added type `RecurringOrderPagedQueryResponse`
- added type `RecurringOrderPaused`
- added type `RecurringOrderReference`
- added type `RecurringOrderResourceIdentifier`
- added type `RecurringOrderState`
- added type `RecurringOrderStateDraft`
- added type `RecurringOrderUpdate`
- added type `RecurringOrderUpdateAction`
- added type `SkipConfiguration`
- added type `SkipConfigurationDraft`
- added type `RecurringOrderSetCustomFieldAction`
- added type `RecurringOrderSetCustomTypeAction`
- added type `RecurringOrderSetExpiresAtAction`
- added type `RecurringOrderSetKeyAction`
- added type `RecurringOrderSetOrderSkipConfigurationAction`
- added type `RecurringOrderSetScheduleAction`
- added type `RecurringOrderSetStartsAtAction`
- added type `RecurringOrderSetStateAction`
- added type `RecurringOrderTransitionStateAction`
- added type `SearchFuzzyExpression`
- added type `SearchFuzzyValue`
- added type `ShoppingListSetBusinessUnitAction`
- added type `EventDeliveryPayload`
- added type `EventSubscription`
- added type `EventSubscriptionResourceTypeId`
- added type `EventType`
- added type `SubscriptionNotification`
- added type `SubscriptionSetEventsAction`
</details>


<details>
<summary>Changed Type(s)</summary>

- :warning: changed type `DeliveryPayload` from type `object` to `SubscriptionNotification`
</details>


<details>
<summary>MarkDeprecated Type(s)</summary>

- marked type `ProductSearchProjectionParams` as deprecated
</details>


<details>
<summary>Deprecated Type(s)</summary>

- type `ProductLegacySetSkuAction` is removed
</details>


<details>
<summary>Removed Type(s)</summary>

- :warning: removed type `AssociateRoleNameChangedMessage`
- :warning: removed type `AssociateRoleNameChangedMessagePayload`
- :warning: removed type `ProductSearchFacetScope`
</details>


<details>
<summary>Added QueryParameter(s)</summary>

- added query parameter `priceCustomerGroupAssignments` to method `get /{projectKey}/products`
- added query parameter `priceRecurrencePolicy` to method `get /{projectKey}/products`
- added query parameter `priceCustomerGroupAssignments` to method `post /{projectKey}/products`
- added query parameter `priceRecurrencePolicy` to method `post /{projectKey}/products`
- added query parameter `priceCustomerGroupAssignments` to method `get /{projectKey}/product-projections`
- added query parameter `priceRecurrencePolicy` to method `get /{projectKey}/product-projections`
- added query parameter `filter[attributes]` to method `get /{projectKey}/product-projections`
- added query parameter `priceCustomerGroupAssignments` to method `get /{projectKey}/products/key={key}`
- added query parameter `priceRecurrencePolicy` to method `get /{projectKey}/products/key={key}`
- added query parameter `priceCustomerGroupAssignments` to method `post /{projectKey}/products/key={key}`
- added query parameter `priceRecurrencePolicy` to method `post /{projectKey}/products/key={key}`
- added query parameter `priceCustomerGroupAssignments` to method `delete /{projectKey}/products/key={key}`
- added query parameter `priceRecurrencePolicy` to method `delete /{projectKey}/products/key={key}`
- added query parameter `priceCustomerGroupAssignments` to method `get /{projectKey}/products/{ID}`
- added query parameter `priceRecurrencePolicy` to method `get /{projectKey}/products/{ID}`
- added query parameter `priceCustomerGroupAssignments` to method `post /{projectKey}/products/{ID}`
- added query parameter `priceRecurrencePolicy` to method `post /{projectKey}/products/{ID}`
- added query parameter `priceCustomerGroupAssignments` to method `delete /{projectKey}/products/{ID}`
- added query parameter `priceRecurrencePolicy` to method `delete /{projectKey}/products/{ID}`
- added query parameter `priceCustomerGroupAssignments` to method `get /{projectKey}/product-projections/search`
- added query parameter `priceRecurrencePolicy` to method `get /{projectKey}/product-projections/search`
- added query parameter `priceCustomerGroupAssignments` to method `get /{projectKey}/product-projections/key={key}`
- added query parameter `priceRecurrencePolicy` to method `get /{projectKey}/product-projections/key={key}`
- added query parameter `filter[attributes]` to method `get /{projectKey}/product-projections/key={key}`
- added query parameter `priceCustomerGroupAssignments` to method `get /{projectKey}/product-projections/{ID}`
- added query parameter `priceRecurrencePolicy` to method `get /{projectKey}/product-projections/{ID}`
- added query parameter `filter[attributes]` to method `get /{projectKey}/product-projections/{ID}`
- added query parameter `priceCustomerGroupAssignments` to method `get /{projectKey}/in-store/key={storeKey}/product-projections/key={key}`
- added query parameter `priceRecurrencePolicy` to method `get /{projectKey}/in-store/key={storeKey}/product-projections/key={key}`
- added query parameter `filter[attributes]` to method `get /{projectKey}/in-store/key={storeKey}/product-projections/key={key}`
- added query parameter `priceCustomerGroupAssignments` to method `get /{projectKey}/in-store/key={storeKey}/product-projections/{ID}`
- added query parameter `priceRecurrencePolicy` to method `get /{projectKey}/in-store/key={storeKey}/product-projections/{ID}`
- added query parameter `filter[attributes]` to method `get /{projectKey}/in-store/key={storeKey}/product-projections/{ID}`
</details>


<details>
<summary>Removed QueryParameter(s)</summary>

- :warning: removed query parameter `withTotal` from method `get /{projectKey}/product-projections/search`
</details>


<details>
<summary>Added Enum(s)</summary>

- added enum `ViewMyShoppingLists` to type `Permission`
- added enum `ViewOthersShoppingLists` to type `Permission`
- added enum `UpdateMyShoppingLists` to type `Permission`
- added enum `UpdateOthersShoppingLists` to type `Permission`
- added enum `CreateMyShoppingLists` to type `Permission`
- added enum `CreateOthersShoppingLists` to type `Permission`
- added enum `DeleteMyShoppingLists` to type `Permission`
- added enum `DeleteOthersShoppingLists` to type `Permission`
- added enum `RecurringOrder` to type `CartOrigin`
- added enum `ApplicationStoppedByGroupBestDeal` to type `DiscountCodeState`
- added enum `discount-group` to type `ReferenceTypeId`
- added enum `payment-method` to type `ReferenceTypeId`
- added enum `recurrence-policy` to type `ReferenceTypeId`
- added enum `recurring-order` to type `ReferenceTypeId`
- added enum `payment-method` to type `ExtensionResourceTypeId`
- added enum `RecurringOrderState` to type `StateTypeEnum`
- added enum `discount-group` to type `ChangeSubscriptionResourceTypeId`
- added enum `recurrence-policy` to type `ChangeSubscriptionResourceTypeId`
- added enum `recurring-order` to type `ChangeSubscriptionResourceTypeId`
- added enum `payment-method` to type `ResourceTypeId`
- added enum `payment-method-info` to type `ResourceTypeId`
- added enum `recurring-order` to type `ResourceTypeId`
</details>


<details>
<summary>Required Property(s)</summary>

- changed property `sortOrder` of type `CartDiscountDraft` to be optional
- changed property `variantSelection` of type `ProductSelectionProductAddedMessage` to be optional
- changed property `variantExclusion` of type `ProductSelectionProductExcludedMessage` to be optional
- changed property `oldVariantExclusion` of type `ProductSelectionVariantExclusionChangedMessage` to be optional
- changed property `newVariantExclusion` of type `ProductSelectionVariantExclusionChangedMessage` to be optional
- changed property `oldVariantSelection` of type `ProductSelectionVariantSelectionChangedMessage` to be optional
- changed property `newVariantSelection` of type `ProductSelectionVariantSelectionChangedMessage` to be optional
- changed property `variantSelection` of type `ProductSelectionProductAddedMessagePayload` to be optional
- changed property `variantExclusion` of type `ProductSelectionProductExcludedMessagePayload` to be optional
- changed property `oldVariantExclusion` of type `ProductSelectionVariantExclusionChangedMessagePayload` to be optional
- changed property `newVariantExclusion` of type `ProductSelectionVariantExclusionChangedMessagePayload` to be optional
- changed property `oldVariantSelection` of type `ProductSelectionVariantSelectionChangedMessagePayload` to be optional
- changed property `newVariantSelection` of type `ProductSelectionVariantSelectionChangedMessagePayload` to be optional
- changed property `images` of type `ProductTailoringSetExternalImagesAction` to be optional
- changed property `facets` of type `ProductProjectionPagedSearchResponse` to be optional
- :warning: changed property `shippingAddressIds` of type `BusinessUnit` to be required
- :warning: changed property `billingAddressIds` of type `BusinessUnit` to be required
- :warning: changed property `shippingAddressIds` of type `Company` to be required
- :warning: changed property `billingAddressIds` of type `Company` to be required
- :warning: changed property `shippingAddressIds` of type `Division` to be required
- :warning: changed property `billingAddressIds` of type `Division` to be required
- :warning: changed property `triggerPattern` of type `CartDiscountPatternTarget` to be required
- :warning: changed property `shippingAddressIds` of type `Customer` to be required
- :warning: changed property `billingAddressIds` of type `Customer` to be required
</details>


<details>
<summary>Changed Property(s)</summary>

- :warning: changed property `discount` of type `DiscountedTotalPricePortion` from type `CartDiscountReference` to `Reference`
- :warning: changed property `actions` of type `MyBusinessUnitUpdate` from type `BusinessUnitUpdateAction[]` to `MyBusinessUnitUpdateAction[]`
- :warning: changed property `paymentMethodInfo` of type `MyPaymentDraft` from type `PaymentMethodInfo` to `PaymentMethodInfoDraft`
- :warning: changed property `paymentMethodInfo` of type `PaymentDraft` from type `PaymentMethodInfo` to `PaymentMethodInfoDraft`
- :warning: changed property `filter` of type `SearchSorting` from type `SearchQueryExpression` to `SearchQuery`
</details>


<details>
<summary>MarkDeprecated Property(s)</summary>

- marked property `CountOnCustomLineItemUnits::excludeCount` as deprecated
- marked property `CountOnLineItemUnits::excludeCount` as deprecated
- marked property `ProductSearchRequest::productProjectionParameters` as deprecated
- marked property `ProductSearchResult::productProjection` as deprecated
</details>


<details>
<summary>Removed Property(s)</summary>

- :warning: removed property `payment` from type `OrderPaymentAddedMessage`
- :warning: removed property `payment` from type `OrderPaymentAddedMessagePayload`
- :warning: removed property `/[0-9].[0-9]*[1-9]/` from type `CategoryOrderHints`
- :warning: removed property `//` from type `ProductVariantChannelAvailabilityMap`
- :warning: removed property `tierMinimumQuantity` from type `StandalonePriceRemovePriceTierAction`
</details>


<details>
<summary>Added Property(s)</summary>

- added property `inheritedStores` to type `BusinessUnit`
- added property `customerGroupAssignments` to type `BusinessUnit`
- added property `customerGroupAssignments` to type `BusinessUnitDraft`
- added property `inheritedStores` to type `Company`
- added property `customerGroupAssignments` to type `Company`
- added property `customerGroupAssignments` to type `CompanyDraft`
- added property `inheritedStores` to type `Division`
- added property `customerGroupAssignments` to type `Division`
- added property `customerGroupAssignments` to type `DivisionDraft`
- added property `makeInheritedAssociatesExplicit` to type `BusinessUnitChangeAssociateModeAction`
- added property `discountGroup` to type `CartDiscount`
- added property `discountGroup` to type `CartDiscountDraft`
- added property `applicationMode` to type `CartDiscountValueRelative`
- added property `applicationMode` to type `CartDiscountValueRelativeDraft`
- added property `priceRoundingMode` to type `Cart`
- added property `freezeStrategy` to type `Cart`
- added property `discountTypeCombination` to type `Cart`
- added property `lock` to type `Cart`
- added property `purchaseOrderNumber` to type `Cart`
- added property `priceRoundingMode` to type `CartDraft`
- added property `purchaseOrderNumber` to type `CartDraft`
- added property `recurrenceInfo` to type `CustomLineItem`
- added property `recurrenceInfo` to type `CustomLineItemDraft`
- added property `recurrenceInfo` to type `LineItem`
- added property `recurrenceInfo` to type `LineItemDraft`
- added property `recurrenceInfo` to type `CartAddCustomLineItemAction`
- added property `recurrenceInfo` to type `CartAddLineItemAction`
- added property `strategy` to type `CartFreezeCartAction`
- added property `recurrencePolicy` to type `Price`
- added property `recurrencePolicy` to type `PriceDraft`
- added property `customerGroupAssignments` to type `Customer`
- added property `invalidateOlderTokens` to type `CustomerCreateEmailToken`
- added property `invalidateOlderTokens` to type `CustomerCreatePasswordResetToken`
- added property `customerGroupAssignments` to type `CustomerDraft`
- added property `invalidateOlderTokens` to type `CustomerToken`
- added property `minCartQuantity` to type `InventoryEntry`
- added property `maxCartQuantity` to type `InventoryEntry`
- added property `minCartQuantity` to type `InventoryEntryDraft`
- added property `maxCartQuantity` to type `InventoryEntryDraft`
- added property `recurrenceInfo` to type `MyLineItemDraft`
- added property `interfaceId` to type `MyTransactionDraft`
- added property `recurrenceInfo` to type `MyCartAddLineItemAction`
- added property `addressRoles` to type `BusinessUnitAddressChangedMessage`
- added property `addressRoles` to type `BusinessUnitAddressRemovedMessage`
- added property `addressRoles` to type `CustomerAddressChangedMessage`
- added property `addressRoles` to type `CustomerAddressRemovedMessage`
- added property `email` to type `CustomerDeletedMessage`
- added property `oldEmail` to type `CustomerEmailChangedMessage`
- added property `value` to type `CustomerEmailTokenCreatedMessage`
- added property `invalidateOlderTokens` to type `CustomerEmailTokenCreatedMessage`
- added property `value` to type `CustomerPasswordTokenCreatedMessage`
- added property `invalidateOlderTokens` to type `CustomerPasswordTokenCreatedMessage`
- added property `sku` to type `InventoryEntryQuantitySetMessage`
- added property `paymentRef` to type `OrderPaymentAddedMessage`
- added property `attributes` to type `ProductTailoringCreatedMessage`
- added property `addressRoles` to type `BusinessUnitAddressChangedMessagePayload`
- added property `addressRoles` to type `BusinessUnitAddressRemovedMessagePayload`
- added property `addressRoles` to type `CustomerAddressChangedMessagePayload`
- added property `addressRoles` to type `CustomerAddressRemovedMessagePayload`
- added property `email` to type `CustomerDeletedMessagePayload`
- added property `oldEmail` to type `CustomerEmailChangedMessagePayload`
- added property `value` to type `CustomerEmailTokenCreatedMessagePayload`
- added property `invalidateOlderTokens` to type `CustomerEmailTokenCreatedMessagePayload`
- added property `value` to type `CustomerPasswordTokenCreatedMessagePayload`
- added property `invalidateOlderTokens` to type `CustomerPasswordTokenCreatedMessagePayload`
- added property `sku` to type `InventoryEntryQuantitySetMessagePayload`
- added property `paymentRef` to type `OrderPaymentAddedMessagePayload`
- added property `attributes` to type `ProductTailoringCreatedMessagePayload`
- added property `priceRoundingMode` to type `StagedOrder`
- added property `recurringOrder` to type `StagedOrder`
- added property `discountTypeCombination` to type `StagedOrder`
- added property `recurrenceInfo` to type `StagedOrderAddCustomLineItemAction`
- added property `recurrenceInfo` to type `StagedOrderAddLineItemAction`
- added property `priceRoundingMode` to type `Order`
- added property `recurringOrder` to type `Order`
- added property `discountTypeCombination` to type `Order`
- added property `priceRoundingMode` to type `OrderImportDraft`
- added property `token` to type `PaymentMethodInfo`
- added property `interfaceAccount` to type `PaymentMethodInfo`
- added property `custom` to type `PaymentMethodInfo`
- added property `interfaceId` to type `Transaction`
- added property `interfaceId` to type `TransactionDraft`
- added property `priceCustomerGroupAssignments` to type `ProductSearchProjectionParams`
- added property `attributes` to type `ProductTailoringData`
- added property `attributes` to type `ProductTailoringDraft`
- added property `attributes` to type `ProductTailoringInStoreDraft`
- added property `level` to type `AttributeDefinition`
- added property `level` to type `AttributeDefinitionDraft`
- added property `/^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$/` to type `CategoryOrderHints`
- added property `attributes` to type `ProductData`
- added property `attributes` to type `ProductDraft`
- added property `attributes` to type `ProductProjection`
- added property `recurrencePrices` to type `ProductVariant`
- added property `/^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$/` to type `ProductVariantChannelAvailabilityMap`
- added property `priceRoundingMode` to type `CartsConfiguration`
- added property `taxRoundingMode` to type `CartsConfiguration`
- added property `discounts` to type `Project`
- added property `priceRoundingMode` to type `QuoteRequest`
- added property `priceRoundingMode` to type `Quote`
- added property `businessUnit` to type `ShoppingList`
- added property `businessUnit` to type `ShoppingListDraft`
- added property `published` to type `ShoppingListLineItem`
- added property `recurrencePolicy` to type `StandalonePrice`
- added property `recurrencePolicy` to type `StandalonePriceDraft`
- added property `minimumQuantity` to type `StandalonePriceRemovePriceTierAction`
- added property `events` to type `Subscription`
- added property `events` to type `SubscriptionDraft`
</details>


<details>
<summary>Added Method(s)</summary>

- added method `$apiRoot->withProjectKey()->discountGroups()->get()`
- added method `$apiRoot->withProjectKey()->discountGroups()->head()`
- added method `$apiRoot->withProjectKey()->discountGroups()->post()`
- added method `$apiRoot->withProjectKey()->paymentMethods()->get()`
- added method `$apiRoot->withProjectKey()->paymentMethods()->head()`
- added method `$apiRoot->withProjectKey()->paymentMethods()->post()`
- added method `$apiRoot->withProjectKey()->recurringOrders()->get()`
- added method `$apiRoot->withProjectKey()->recurringOrders()->head()`
- added method `$apiRoot->withProjectKey()->recurringOrders()->post()`
- added method `$apiRoot->withProjectKey()->recurrencePolicies()->get()`
- added method `$apiRoot->withProjectKey()->recurrencePolicies()->head()`
- added method `$apiRoot->withProjectKey()->recurrencePolicies()->post()`
- added method `$apiRoot->withProjectKey()->asAssociate()->withAssociateIdValue()->inBusinessUnitKeyWithBusinessUnitKeyValue()->shoppingLists()->get()`
- added method `$apiRoot->withProjectKey()->asAssociate()->withAssociateIdValue()->inBusinessUnitKeyWithBusinessUnitKeyValue()->shoppingLists()->head()`
- added method `$apiRoot->withProjectKey()->asAssociate()->withAssociateIdValue()->inBusinessUnitKeyWithBusinessUnitKeyValue()->shoppingLists()->post()`
- added method `$apiRoot->withProjectKey()->asAssociate()->withAssociateIdValue()->inBusinessUnitKeyWithBusinessUnitKeyValue()->shoppingLists()->withKey()->get()`
- added method `$apiRoot->withProjectKey()->asAssociate()->withAssociateIdValue()->inBusinessUnitKeyWithBusinessUnitKeyValue()->shoppingLists()->withKey()->head()`
- added method `$apiRoot->withProjectKey()->asAssociate()->withAssociateIdValue()->inBusinessUnitKeyWithBusinessUnitKeyValue()->shoppingLists()->withKey()->post()`
- added method `$apiRoot->withProjectKey()->asAssociate()->withAssociateIdValue()->inBusinessUnitKeyWithBusinessUnitKeyValue()->shoppingLists()->withKey()->delete()`
- added method `$apiRoot->withProjectKey()->asAssociate()->withAssociateIdValue()->inBusinessUnitKeyWithBusinessUnitKeyValue()->shoppingLists()->withId()->get()`
- added method `$apiRoot->withProjectKey()->asAssociate()->withAssociateIdValue()->inBusinessUnitKeyWithBusinessUnitKeyValue()->shoppingLists()->withId()->head()`
- added method `$apiRoot->withProjectKey()->asAssociate()->withAssociateIdValue()->inBusinessUnitKeyWithBusinessUnitKeyValue()->shoppingLists()->withId()->post()`
- added method `$apiRoot->withProjectKey()->asAssociate()->withAssociateIdValue()->inBusinessUnitKeyWithBusinessUnitKeyValue()->shoppingLists()->withId()->delete()`
- added method `$apiRoot->withProjectKey()->businessUnits()->keyWithKeyValueAssociatesWithAssociateIdValue()->get()`
- added method `$apiRoot->withProjectKey()->businessUnits()->withBusinessUnitIdValueAssociatesWithAssociateIdValue()->get()`
- added method `$apiRoot->withProjectKey()->carts()->customerIdWithCustomerIdValueMerge()->post()`
- added method `$apiRoot->withProjectKey()->discountGroups()->withKey()->get()`
- added method `$apiRoot->withProjectKey()->discountGroups()->withKey()->head()`
- added method `$apiRoot->withProjectKey()->discountGroups()->withKey()->post()`
- added method `$apiRoot->withProjectKey()->discountGroups()->withKey()->delete()`
- added method `$apiRoot->withProjectKey()->discountGroups()->withId()->get()`
- added method `$apiRoot->withProjectKey()->discountGroups()->withId()->head()`
- added method `$apiRoot->withProjectKey()->discountGroups()->withId()->post()`
- added method `$apiRoot->withProjectKey()->discountGroups()->withId()->delete()`
- added method `$apiRoot->withProjectKey()->paymentMethods()->withKey()->get()`
- added method `$apiRoot->withProjectKey()->paymentMethods()->withKey()->head()`
- added method `$apiRoot->withProjectKey()->paymentMethods()->withKey()->post()`
- added method `$apiRoot->withProjectKey()->paymentMethods()->withKey()->delete()`
- added method `$apiRoot->withProjectKey()->paymentMethods()->withId()->get()`
- added method `$apiRoot->withProjectKey()->paymentMethods()->withId()->head()`
- added method `$apiRoot->withProjectKey()->paymentMethods()->withId()->post()`
- added method `$apiRoot->withProjectKey()->paymentMethods()->withId()->delete()`
- added method `$apiRoot->withProjectKey()->recurringOrders()->withId()->get()`
- added method `$apiRoot->withProjectKey()->recurringOrders()->withId()->head()`
- added method `$apiRoot->withProjectKey()->recurringOrders()->withId()->post()`
- added method `$apiRoot->withProjectKey()->recurringOrders()->withId()->delete()`
- added method `$apiRoot->withProjectKey()->recurringOrders()->withKey()->get()`
- added method `$apiRoot->withProjectKey()->recurringOrders()->withKey()->head()`
- added method `$apiRoot->withProjectKey()->recurringOrders()->withKey()->post()`
- added method `$apiRoot->withProjectKey()->recurringOrders()->withKey()->delete()`
- added method `$apiRoot->withProjectKey()->recurrencePolicies()->withKey()->get()`
- added method `$apiRoot->withProjectKey()->recurrencePolicies()->withKey()->head()`
- added method `$apiRoot->withProjectKey()->recurrencePolicies()->withKey()->post()`
- added method `$apiRoot->withProjectKey()->recurrencePolicies()->withKey()->delete()`
- added method `$apiRoot->withProjectKey()->recurrencePolicies()->withId()->get()`
- added method `$apiRoot->withProjectKey()->recurrencePolicies()->withId()->head()`
- added method `$apiRoot->withProjectKey()->recurrencePolicies()->withId()->post()`
- added method `$apiRoot->withProjectKey()->recurrencePolicies()->withId()->delete()`
- added method `$apiRoot->withProjectKey()->inStoreKeyWithStoreKeyValue()->businessUnits()->get()`
- added method `$apiRoot->withProjectKey()->inStoreKeyWithStoreKeyValue()->businessUnits()->head()`
- added method `$apiRoot->withProjectKey()->inStoreKeyWithStoreKeyValue()->businessUnits()->post()`
- added method `$apiRoot->withProjectKey()->inStoreKeyWithStoreKeyValue()->businessUnits()->withKey()->get()`
- added method `$apiRoot->withProjectKey()->inStoreKeyWithStoreKeyValue()->businessUnits()->withKey()->head()`
- added method `$apiRoot->withProjectKey()->inStoreKeyWithStoreKeyValue()->businessUnits()->withKey()->post()`
- added method `$apiRoot->withProjectKey()->inStoreKeyWithStoreKeyValue()->businessUnits()->withKey()->delete()`
- added method `$apiRoot->withProjectKey()->inStoreKeyWithStoreKeyValue()->businessUnits()->withId()->get()`
- added method `$apiRoot->withProjectKey()->inStoreKeyWithStoreKeyValue()->businessUnits()->withId()->head()`
- added method `$apiRoot->withProjectKey()->inStoreKeyWithStoreKeyValue()->businessUnits()->withId()->post()`
- added method `$apiRoot->withProjectKey()->inStoreKeyWithStoreKeyValue()->businessUnits()->withId()->delete()`
- added method `$apiRoot->withProjectKey()->inStoreKeyWithStoreKeyValue()->businessUnits()->keyWithKeyValueAssociatesWithAssociateIdValue()->get()`
- added method `$apiRoot->withProjectKey()->inStoreKeyWithStoreKeyValue()->businessUnits()->withBusinessUnitIdValueAssociatesWithAssociateIdValue()->get()`
- added method `$apiRoot->withProjectKey()->inStoreKeyWithStoreKeyValue()->carts()->customerIdWithCustomerIdValueMerge()->post()`
</details>


<details>
<summary>Added Resource(s)</summary>

- added resource `/{projectKey}/discount-groups`
- added resource `/{projectKey}/payment-methods`
- added resource `/{projectKey}/recurring-orders`
- added resource `/{projectKey}/recurrence-policies`
- added resource `/{projectKey}/as-associate/{associateId}/in-business-unit/key={businessUnitKey}/shopping-lists`
- added resource `/{projectKey}/as-associate/{associateId}/in-business-unit/key={businessUnitKey}/shopping-lists/key={key}`
- added resource `/{projectKey}/as-associate/{associateId}/in-business-unit/key={businessUnitKey}/shopping-lists/{ID}`
- added resource `/{projectKey}/business-units/key={key}/associates/{associateId}`
- added resource `/{projectKey}/business-units/{businessUnitId}/associates/{associateId}`
- added resource `/{projectKey}/carts/customer-id={customerId}/merge`
- added resource `/{projectKey}/discount-groups/key={key}`
- added resource `/{projectKey}/discount-groups/{ID}`
- added resource `/{projectKey}/payment-methods/key={key}`
- added resource `/{projectKey}/payment-methods/{ID}`
- added resource `/{projectKey}/recurring-orders/{ID}`
- added resource `/{projectKey}/recurring-orders/key={key}`
- added resource `/{projectKey}/recurrence-policies/key={key}`
- added resource `/{projectKey}/recurrence-policies/{ID}`
- added resource `/{projectKey}/in-store/key={storeKey}/business-units`
- added resource `/{projectKey}/in-store/key={storeKey}/business-units/key={key}`
- added resource `/{projectKey}/in-store/key={storeKey}/business-units/{ID}`
- added resource `/{projectKey}/in-store/key={storeKey}/business-units/key={key}/associates/{associateId}`
- added resource `/{projectKey}/in-store/key={storeKey}/business-units/{businessUnitId}/associates/{associateId}`
- added resource `/{projectKey}/in-store/key={storeKey}/carts/customer-id={customerId}/merge`
</details>

**Import changes**

<details>
<summary>Added Type(s)</summary>

- added type `AssociateRoleKeyReference`
- added type `BusinessUnitKeyReference`
- added type `StrategyEnum`
- added type `RetentionPolicy`
- added type `TimeToLiveConfig`
- added type `TimeToLiveRetentionPolicy`
- added type `ProductSelectionImportRequest`
- added type `BusinessUnitImportRequest`
- added type `AssociateRoleInheritanceMode`
- added type `BusinessUnitStatus`
- added type `BusinessUnitAssociateMode`
- added type `BusinessUnitApprovalRuleMode`
- added type `BusinessUnitStoreMode`
- added type `BusinessUnitType`
- added type `AssociateRoleAssignmentDraft`
- added type `AssociateDraft`
- added type `BusinessUnitImport`
- added type `CompanyBusinessUnitImport`
- added type `DivisionBusinessUnitImport`
- added type `VariantSelectionType`
- added type `VariantSelection`
- added type `VariantExclusion`
- added type `ProductSelectionAssignment`
- added type `ProductSelectionMode`
- added type `ProductSelectionImport`
- added type `AttributeLevel`
</details>


<details>
<summary>Added Enum(s)</summary>

- added enum `business-unit` to type `ImportResourceType`
- added enum `product-selection` to type `ImportResourceType`
- added enum `associate-role` to type `ReferenceType`
- added enum `business-unit` to type `ReferenceType`
</details>


<details>
<summary>Changed Property(s)</summary>

- :warning: changed property `value` of type `MoneySetField` from type `Money[]` to `TypedMoney[]`
- :warning: changed property `country` of type `ExternalTaxRateDraft` from type `string` to `CountryCode`
</details>


<details>
<summary>Removed Property(s)</summary>

- :warning: removed property `/^[a-z]{2}(-[A-Z]{2})?$/` from type `SearchKeywords`
- :warning: removed property `/^[a-z]{2}(-[A-Z]{2})?$/` from type `LocalizedString`
</details>


<details>
<summary>Added Property(s)</summary>

- added property `/^[a-zA-Z]{2,3}(?:-[a-zA-Z]{4})?(?:-(?:[a-zA-Z]{2}|\d{3}))?$/` to type `LocalizedString`
- added property `retentionPolicy` to type `ImportContainer`
- added property `expiresAt` to type `ImportContainer`
- added property `retentionPolicy` to type `ImportContainerDraft`
- added property `attributes` to type `ProductDraftImport`
- added property `/^[a-zA-Z]{2,3}(?:-[a-zA-Z]{4})?(?:-(?:[a-zA-Z]{2}|\d{3}))?$/` to type `SearchKeywords`
- added property `attributes` to type `ProductImport`
- added property `level` to type `AttributeDefinition`
</details>


<details>
<summary>Added Method(s)</summary>

- added method `$apiRoot->withProjectKeyValue()->businessUnits()->importContainers()->withImportContainerKeyValue()->post()`
- added method `$apiRoot->withProjectKeyValue()->productSelections()->importContainers()->withImportContainerKeyValue()->post()`
</details>


<details>
<summary>Added Resource(s)</summary>

- added resource `/{projectKey}/business-units`
- added resource `/{projectKey}/product-selections`
- added resource `/{projectKey}/business-units/import-containers`
- added resource `/{projectKey}/business-units/import-containers/{importContainerKey}`
- added resource `/{projectKey}/product-selections/import-containers`
- added resource `/{projectKey}/product-selections/import-containers/{importContainerKey}`
</details>

**History changes**

<details>
<summary>Added Type(s)</summary>

- added type `TooManyRequestsError`
- added type `GraphQLTooManyRequestsError`
- added type `DirectDiscount`
- added type `DiscountTypeCombination`
- added type `BestDeal`
- added type `Stacking`
- added type `ShippingMethodLabel`
- added type `AddShippingChange`
- added type `ChangeApprovalRuleModeChange`
- added type `ChangeCustomerChange`
- added type `ChangeIncludedInStatisticsChange`
- added type `ChangeLastVariantIdChange`
- added type `ChangeLineItemNameChange`
- added type `ChangeLineItemPublishedChange`
- added type `ExcludeProductChange`
- added type `RemoveShippingChange`
- added type `ReplaceTaxRateChange`
- added type `RevertStagedChangesChange`
- added type `RevertStagedVariantChangesChange`
- added type `SetAncestorsChange`
- added type `SetBillingAddressCustomFieldChange`
- added type `SetBillingAddressCustomTypeChange`
- added type `SetBusinessUnitChange`
- added type `SetCustomLineItemDiscountedPriceChange`
- added type `SetCustomLineItemDiscountedPricePerQuantityChange`
- added type `SetCustomerGroupAssignmentsChange`
- added type `SetDeliveryAddressCustomFieldChange`
- added type `SetDeliveryAddressCustomTypeChange`
- added type `SetDeliveryCustomFieldChange`
- added type `SetDeliveryCustomTypeChange`
- added type `SetDiscountOnTotalPriceChange`
- added type `SetInheritedStoresChange`
- added type `SetItemShippingAddressCustomFieldChange`
- added type `SetItemShippingAddressCustomTypeChange`
- added type `SetMaxCartQuantityChange`
- added type `SetMinCartQuantityChange`
- added type `SetParcelCustomFieldChange`
- added type `SetParcelCustomTypeChange`
- added type `SetPasswordChange`
- added type `SetPriceKeyChange`
- added type `SetPriceModeChange`
- added type `SetProductAttributeChange`
- added type `SetReturnInfoChange`
- added type `SetReturnItemCustomLineItemCustomFieldChange`
- added type `SetReturnItemCustomLineItemCustomTypeChange`
- added type `SetReturnItemLineItemCustomFieldChange`
- added type `SetReturnItemLineItemCustomTypeChange`
- added type `SetShippingAddressCustomFieldChange`
- added type `SetShippingAddressCustomTypeChange`
- added type `SetShippingCustomFieldChange`
- added type `SetShippingCustomTypeChange`
- added type `SetTransactionCustomFieldChange`
- added type `SetTransactionCustomTypeChange`
- added type `SetUnitTypeChange`
- added type `SetVariantExclusionChange`
- added type `UpdateItemShippingAddressChange`
- added type `SetAssociatesChange`
- added type `SetInheritedAssociatesChange`
- added type `ChangeTopLevelUnitChange`
- added type `Attribute`
- added type `BusinessUnitApprovalRuleMode`
- added type `BusinessUnitResourceIdentifier`
- added type `BusinessUnitType`
- added type `CustomFieldEnumValue`
- added type `CustomFieldLocalizedEnumValue`
- added type `CustomerGroupAssignment`
- added type `DiscountOnTotalPrice`
- added type `DiscountedTotalPricePortion`
- added type `ProductPriceModeEnum`
- added type `ProductVariantExclusion`
- added type `Shipping`
- added type `ShippingInfo`
- added type `ShippingRateInput`
- added type `ShoppingListLineItem`
- added type `TypeTextInputHint`
- added type `TypedMoney`
- added type `CentPrecisionMoney`
- added type `DiscountedPrice`
- added type `ShippingMethodState`
- added type `AssociateRoleDeprecated`
- added type `AssociateRoleKeyReference`
- added type `AttributeLevelEnum`
- added type `BaseAddress`
- added type `BusinessUnitKeyReference`
- added type `CartDiscountReference`
- added type `CartDiscountTarget`
- added type `CartDiscountValue`
- added type `CategoryReference`
- added type `ChannelReference`
- added type `CustomFieldValue`
- added type `CustomLineItemPriceMode`
- added type `CustomLineItemRecurrenceInfo`
- added type `CustomerGroupReference`
- added type `CustomerReference`
- added type `DiscountCodeReference`
- added type `FieldContainer`
- added type `GeoJson`
- added type `InventoryMode`
- added type `LineItemMode`
- added type `LineItemPriceMode`
- added type `LineItemRecurrenceInfo`
- added type `MethodTaxRate`
- added type `MethodTaxedPrice`
- added type `PaymentReference`
- added type `PriceSelectionMode`
- added type `PriceTier`
- added type `ProductDiscountReference`
- added type `ProductDiscountValue`
- added type `ProductReference`
- added type `ProductSelectionReference`
- added type `ProductTypeReference`
- added type `ProductVariant`
- added type `RecurrencePolicyReference`
- added type `ResourceTypeId`
- added type `ScopedPrice`
- added type `ShippingMethodReference`
- added type `StateReference`
- added type `StoreKeyReference`
- added type `TaxCategoryReference`
- added type `TaxPortion`
- added type `TypeReference`
- added type `ClientLogging`
- added type `ChangePriceRoundingModeChange`
- added type `ChangeCustomLineItemPriceRoundingModeChange`
- added type `ChangeLineItemPriceRoundingModeChange`
- added type `SetDirectDiscountsChange`
- added type `SetReferencesChange`
- added type `SetShippingInfoDiscountedPriceChange`
- added type `SetShippingMethodTaxCategoryChange`
- added type `SetTaxedShippingPriceChange`
- added type `ShippingMethodAddShippingRateChange`
- added type `ShippingMethodAddZoneChange`
- added type `ShippingMethodChangeActiveChange`
- added type `ShippingMethodChangeIsDefaultChange`
- added type `ShippingMethodChangeNameChange`
- added type `ShippingMethodChangeTaxCategoryChange`
- added type `ShippingMethodRemoveShippingRateChange`
- added type `ShippingMethodRemoveZoneChange`
- added type `ShippingMethodSetCustomFieldChange`
- added type `ShippingMethodSetCustomTypeChange`
- added type `ShippingMethodSetKeyChange`
- added type `ShippingMethodSetLocalizedDescriptionChange`
- added type `ShippingMethodSetLocalizedNameChange`
- added type `ShippingMethodSetPredicateChange`
- added type `ZoneResourceIdentifier`
- added type `ChangeDiscountTypeCombinationChange`
- added type `StandalonePriceChangeActiveChange`
- added type `StandalonePriceChangeValueChange`
- added type `StandalonePriceSetCustomFieldChange`
- added type `StandalonePriceSetCustomTypeChange`
- added type `StandalonePriceSetDiscountedPriceChange`
- added type `StandalonePriceSetKeyChange`
- added type `StandalonePriceSetPriceTiersChange`
- added type `StandalonePriceSetValidFromAndUntilChange`
- added type `StandalonePriceSetValidFromChange`
- added type `StandalonePriceSetValidUntilChange`
- added type `StandalonePriceLabel`
</details>


<details>
<summary>Changed Type(s)</summary>

- :warning: changed type `Address` from type `object` to `BaseAddress`
- :warning: changed type `GeoLocation` from type `object` to `GeoJson`
</details>


<details>
<summary>MarkDeprecated Type(s)</summary>

- marked type `AddAssociateChange` as deprecated
- marked type `AddPriceChange` as deprecated
- marked type `AddProductSelectionChange` as deprecated
- marked type `AddStateRolesChange` as deprecated
- marked type `ChangeAmountAuthorizedChange` as deprecated
- marked type `RemoveAssociateChange` as deprecated
- marked type `RemovePriceChange` as deprecated
- marked type `RemoveProductSelectionChange` as deprecated
- marked type `RemoveStateRolesChange` as deprecated
</details>


<details>
<summary>Added Enum(s)</summary>

- added enum `shipping-method` to type `ChangeHistoryResourceType`
- added enum `standalone-price` to type `ChangeHistoryResourceType`
- added enum `addInheritedAssociate` to type `PlatformInitiatedChange`
- added enum `changeIncludedInStatistics` to type `PlatformInitiatedChange`
- added enum `changeInheritedAssociate` to type `PlatformInitiatedChange`
- added enum `changeLastVariantId` to type `PlatformInitiatedChange`
- added enum `changeLineItemPublished` to type `PlatformInitiatedChange`
- added enum `changeTopLevelUnit` to type `PlatformInitiatedChange`
- added enum `removeInheritedAssociate` to type `PlatformInitiatedChange`
- added enum `setAncestors` to type `PlatformInitiatedChange`
- added enum `setInheritedAssociates` to type `PlatformInitiatedChange`
- added enum `setInheritedStores` to type `PlatformInitiatedChange`
- added enum `setLineItemDeactivatedAt` to type `PlatformInitiatedChange`
- added enum `setProductCount` to type `PlatformInitiatedChange`
- added enum `setReservations` to type `PlatformInitiatedChange`
- added enum `addShipping` to type `UpdateType`
- added enum `addShippingRate` to type `UpdateType`
- added enum `addZone` to type `UpdateType`
- added enum `changeActive` to type `UpdateType`
- added enum `changeApprovalRuleMode` to type `UpdateType`
- added enum `changeCustomLineItemPriceRoundingMode` to type `UpdateType`
- added enum `changeCustomer` to type `UpdateType`
- added enum `changeDiscountTypeCombination` to type `UpdateType`
- added enum `changeIncludedInStatistics` to type `UpdateType`
- added enum `changeIsDefault` to type `UpdateType`
- added enum `changeLastVariantId` to type `UpdateType`
- added enum `changeLineItemPriceRoundingMode` to type `UpdateType`
- added enum `changeLineItemPublished` to type `UpdateType`
- added enum `changePriceRoundingMode` to type `UpdateType`
- added enum `changeTaxCategory` to type `UpdateType`
- added enum `changeTopLevelUnit` to type `UpdateType`
- added enum `excludeProduct` to type `UpdateType`
- added enum `removeShipping` to type `UpdateType`
- added enum `removeShippingRate` to type `UpdateType`
- added enum `removeZone` to type `UpdateType`
- added enum `replaceTaxRate` to type `UpdateType`
- added enum `revertStagedChanges` to type `UpdateType`
- added enum `revertStagedVariantChanges` to type `UpdateType`
- added enum `setAncestors` to type `UpdateType`
- added enum `setAssetKey` to type `UpdateType`
- added enum `setAssociates` to type `UpdateType`
- added enum `setBillingAddressCustomField` to type `UpdateType`
- added enum `setBillingAddressCustomType` to type `UpdateType`
- added enum `setBusinessUnit` to type `UpdateType`
- added enum `setCustomLineItemDiscountedPrice` to type `UpdateType`
- added enum `setCustomLineItemDiscountedPricePerQuantity` to type `UpdateType`
- added enum `setCustomerGroupAssignments` to type `UpdateType`
- added enum `setDeliveryAddressCustomField` to type `UpdateType`
- added enum `setDeliveryAddressCustomType` to type `UpdateType`
- added enum `setDeliveryCustomField` to type `UpdateType`
- added enum `setDeliveryCustomType` to type `UpdateType`
- added enum `setDirectDiscounts` to type `UpdateType`
- added enum `setDiscountOnTotalPrice` to type `UpdateType`
- added enum `setInheritedAssociates` to type `UpdateType`
- added enum `setInheritedStores` to type `UpdateType`
- added enum `setItemShippingAddressCustomField` to type `UpdateType`
- added enum `setItemShippingAddressCustomType` to type `UpdateType`
- added enum `setLocalizedDescription` to type `UpdateType`
- added enum `setLocalizedName` to type `UpdateType`
- added enum `setMaxCartQuantity` to type `UpdateType`
- added enum `setMinCartQuantity` to type `UpdateType`
- added enum `setParcelCustomField` to type `UpdateType`
- added enum `setParcelCustomType` to type `UpdateType`
- added enum `setPredicate` to type `UpdateType`
- added enum `setPriceKey` to type `UpdateType`
- added enum `setPriceMode` to type `UpdateType`
- added enum `setPriceTiers` to type `UpdateType`
- added enum `setProductAttribute` to type `UpdateType`
- added enum `setReferences` to type `UpdateType`
- added enum `setReturnInfo` to type `UpdateType`
- added enum `setReturnItemCustomField` to type `UpdateType`
- added enum `setReturnItemCustomType` to type `UpdateType`
- added enum `setShippingAddressCustomField` to type `UpdateType`
- added enum `setShippingAddressCustomType` to type `UpdateType`
- added enum `setShippingCustomField` to type `UpdateType`
- added enum `setShippingCustomType` to type `UpdateType`
- added enum `setShippingInfoDiscountedPrice` to type `UpdateType`
- added enum `setShippingMethodTaxCategory` to type `UpdateType`
- added enum `setTaxedShippingPrice` to type `UpdateType`
- added enum `setTransactionCustomField` to type `UpdateType`
- added enum `setTransactionCustomType` to type `UpdateType`
- added enum `setUnitType` to type `UpdateType`
- added enum `setVariantExclusion` to type `UpdateType`
- added enum `ApplicationStoppedByGroupBestDeal` to type `DiscountCodeState`
- added enum `CreateApprovalRules` to type `Permission`
- added enum `UpdateApprovalRules` to type `Permission`
- added enum `UpdateApprovalFlows` to type `Permission`
- added enum `ViewMyShoppingLists` to type `Permission`
- added enum `ViewOthersShoppingLists` to type `Permission`
- added enum `UpdateMyShoppingLists` to type `Permission`
- added enum `UpdateOthersShoppingLists` to type `Permission`
- added enum `CreateMyShoppingLists` to type `Permission`
- added enum `CreateOthersShoppingLists` to type `Permission`
- added enum `DeleteMyShoppingLists` to type `Permission`
- added enum `DeleteOthersShoppingLists` to type `Permission`
- added enum `includeOnly` to type `ProductVariantSelectionTypeEnum`
- added enum `includeAllExcept` to type `ProductVariantSelectionTypeEnum`
- added enum `RenegotiationAddressed` to type `QuoteState`
- added enum `approval-flow` to type `ReferenceTypeId`
- added enum `approval-rule` to type `ReferenceTypeId`
- added enum `attribute-group` to type `ReferenceTypeId`
- added enum `direct-discount` to type `ReferenceTypeId`
- added enum `discount-group` to type `ReferenceTypeId`
- added enum `payment-method` to type `ReferenceTypeId`
- added enum `product-price` to type `ReferenceTypeId`
- added enum `product-tailoring` to type `ReferenceTypeId`
- added enum `recurrence-policy` to type `ReferenceTypeId`
- added enum `recurring-order` to type `ReferenceTypeId`
- added enum `standalone-price` to type `ReferenceTypeId`
- added enum `Delivered` to type `ShipmentState`
- added enum `Canceled` to type `ShipmentState`
- added enum `RecurringOrderState` to type `StateTypeEnum`
</details>


<details>
<summary>Removed Enum(s)</summary>

- :warning: removed enum `changeAmountAuthorized` from type `UpdateType`
- :warning: removed enum `setAsssetKey` from type `UpdateType`
- :warning: removed enum `Failed` from type `QuoteState`
</details>


<details>
<summary>Required Property(s)</summary>

- changed property `id` of type `Address` to be optional
- changed property `key` of type `Address` to be optional
- changed property `title` of type `Address` to be optional
- changed property `salutation` of type `Address` to be optional
- changed property `firstName` of type `Address` to be optional
- changed property `lastName` of type `Address` to be optional
- changed property `streetName` of type `Address` to be optional
- changed property `streetNumber` of type `Address` to be optional
- changed property `additionalStreetInfo` of type `Address` to be optional
- changed property `postalCode` of type `Address` to be optional
- changed property `city` of type `Address` to be optional
- changed property `region` of type `Address` to be optional
- changed property `state` of type `Address` to be optional
- changed property `company` of type `Address` to be optional
- changed property `department` of type `Address` to be optional
- changed property `building` of type `Address` to be optional
- changed property `apartment` of type `Address` to be optional
- changed property `pOBox` of type `Address` to be optional
- changed property `phone` of type `Address` to be optional
- changed property `mobile` of type `Address` to be optional
- changed property `email` of type `Address` to be optional
- changed property `fax` of type `Address` to be optional
- changed property `additionalAddressInfo` of type `Address` to be optional
- changed property `externalId` of type `Address` to be optional
- changed property `description` of type `Asset` to be optional
- changed property `custom` of type `Asset` to be optional
- changed property `key` of type `Asset` to be optional
- changed property `key` of type `AssetSource` to be optional
- changed property `dimensions` of type `AssetSource` to be optional
- changed property `contentType` of type `AssetSource` to be optional
- changed property `inputTip` of type `AttributeDefinition` to be optional
- changed property `taxedPrice` of type `CustomLineItem` to be optional
- changed property `inputHint` of type `FieldDefinition` to be optional
- changed property `label` of type `Image` to be optional
- changed property `productSlug` of type `LineItem` to be optional
- changed property `custom` of type `LineItem` to be optional
- changed property `addedAt` of type `LineItem` to be optional
- changed property `state` of type `Location` to be optional
- changed property `measurements` of type `Parcel` to be optional
- changed property `trackingData` of type `Parcel` to be optional
- changed property `items` of type `Parcel` to be optional
- changed property `heightInMillimeter` of type `ParcelMeasurements` to be optional
- changed property `lengthInMillimeter` of type `ParcelMeasurements` to be optional
- changed property `widthInMillimeter` of type `ParcelMeasurements` to be optional
- changed property `weightInGram` of type `ParcelMeasurements` to be optional
- changed property `channels` of type `ProductVariantAvailability` to be optional
- changed property `isOnStock` of type `ProductVariantAvailability` to be optional
- changed property `restockableInDays` of type `ProductVariantAvailability` to be optional
- changed property `availableQuantity` of type `ProductVariantAvailability` to be optional
- changed property `isOnStock` of type `ProductVariantChannelAvailability` to be optional
- changed property `restockableInDays` of type `ProductVariantChannelAvailability` to be optional
- changed property `availableQuantity` of type `ProductVariantChannelAvailability` to be optional
- changed property `id` of type `ResourceIdentifier` to be optional
- changed property `key` of type `ResourceIdentifier` to be optional
- changed property `returnTrackingId` of type `ReturnInfo` to be optional
- changed property `returnDate` of type `ReturnInfo` to be optional
- changed property `comment` of type `ReturnItem` to be optional
- changed property `suggestTokenizer` of type `SearchKeyword` to be optional
- changed property `freeAbove` of type `ShippingRate` to be optional
- changed property `isMatching` of type `ShippingRate` to be optional
- changed property `externalId` of type `SyncInfo` to be optional
- changed property `id` of type `TaxRate` to be optional
- changed property `state` of type `TaxRate` to be optional
- changed property `subRates` of type `TaxRate` to be optional
- changed property `custom` of type `TextLineItem` to be optional
- changed property `description` of type `TextLineItem` to be optional
- changed property `trackingId` of type `TrackingData` to be optional
- changed property `carrier` of type `TrackingData` to be optional
- changed property `provider` of type `TrackingData` to be optional
- changed property `providerTransaction` of type `TrackingData` to be optional
- changed property `isReturn` of type `TrackingData` to be optional
- changed property `timestamp` of type `Transaction` to be optional
- changed property `interactionId` of type `Transaction` to be optional
- :warning: changed property `triggerPattern` of type `ChangeTargetPatternChangeValue` to be required
</details>


<details>
<summary>Changed Property(s)</summary>

- :warning: changed property `nextValue` of type `AddEnumValueChange` from type `EnumValue` to `CustomFieldEnumValue`
- :warning: changed property `nextValue` of type `AddInterfaceInteractionChange` from type `CustomFieldExpandedValue` to `CustomFields`
- :warning: changed property `nextValue` of type `AddLocalizedEnumValueChange` from type `AttributeLocalizedEnumValue` to `CustomFieldLocalizedEnumValue`
- :warning: changed property `previousValue` of type `AddShoppingListLineItemChange` from type `LineItem` to `ShoppingListLineItem`
- :warning: changed property `nextValue` of type `AddShoppingListLineItemChange` from type `LineItem` to `ShoppingListLineItem`
- :warning: changed property `w` of type `AssetDimensions` from type `integer` to `number`
- :warning: changed property `h` of type `AssetDimensions` from type `integer` to `number`
- :warning: changed property `customer` of type `Associate` from type `Reference` to `CustomerReference`
- :warning: changed property `associateRole` of type `AssociateRoleAssignment` from type `KeyReference` to `AssociateRoleKeyReference`
- :warning: changed property `previousValue` of type `ChangeEnumValueOrderChange` from type `EnumValue[]` to `CustomFieldEnumValue[]`
- :warning: changed property `nextValue` of type `ChangeEnumValueOrderChange` from type `EnumValue[]` to `CustomFieldEnumValue[]`
- :warning: changed property `previousValue` of type `ChangeInputHintChange` from type `TextInputHint` to `TypeTextInputHint`
- :warning: changed property `nextValue` of type `ChangeInputHintChange` from type `TextInputHint` to `TypeTextInputHint`
- :warning: changed property `previousValue` of type `ChangeLocalizedEnumValueOrderChange` from type `LocalizedEnumValue[]` to `AttributeLocalizedEnumValue[]`
- :warning: changed property `nextValue` of type `ChangeLocalizedEnumValueOrderChange` from type `LocalizedEnumValue[]` to `AttributeLocalizedEnumValue[]`
- :warning: changed property `previousValue` of type `ChangePlainEnumValueOrderChange` from type `EnumValue[]` to `AttributePlainEnumValue[]`
- :warning: changed property `nextValue` of type `ChangePlainEnumValueOrderChange` from type `EnumValue[]` to `AttributePlainEnumValue[]`
- :warning: changed property `type` of type `CustomFields` from type `Reference` to `TypeReference`
- :warning: changed property `fields` of type `CustomFields` from type `object` to `FieldContainer`
- :warning: changed property `money` of type `CustomLineItem` from type `Money` to `TypedMoney`
- :warning: changed property `totalPrice` of type `CustomLineItem` from type `Money` to `CentPrecisionMoney`
- :warning: changed property `quantity` of type `CustomLineItem` from type `integer` to `number`
- :warning: changed property `createdAt` of type `Delivery` from type `string` to `datetime`
- :warning: changed property `quantity` of type `DeliveryItem` from type `integer` to `number`
- :warning: changed property `discountCode` of type `DiscountCodeInfo` from type `Reference` to `DiscountCodeReference`
- :warning: changed property `discountedAmount` of type `DiscountedLineItemPortion` from type `Money` to `TypedMoney`
- :warning: changed property `value` of type `DiscountedLineItemPrice` from type `Money` to `TypedMoney`
- :warning: changed property `quantity` of type `DiscountedLineItemPriceForQuantity` from type `integer` to `number`
- :warning: changed property `inputHint` of type `FieldDefinition` from type `TextInputHint` to `TypeTextInputHint`
- :warning: changed property `w` of type `ImageDimensions` from type `integer` to `number`
- :warning: changed property `h` of type `ImageDimensions` from type `integer` to `number`
- :warning: changed property `customer` of type `InheritedAssociate` from type `Reference` to `CustomerReference`
- :warning: changed property `associateRole` of type `InheritedAssociateRoleAssignment` from type `KeyReference` to `AssociateRoleKeyReference`
- :warning: changed property `source` of type `InheritedAssociateRoleAssignment` from type `KeyReference` to `BusinessUnitKeyReference`
- :warning: changed property `quantity` of type `ItemShippingTarget` from type `integer` to `number`
- :warning: changed property `quantity` of type `ItemState` from type `integer` to `number`
- :warning: changed property `state` of type `ItemState` from type `Reference` to `StateReference`
- :warning: changed property `productType` of type `LineItem` from type `Reference` to `ProductTypeReference`
- :warning: changed property `variant` of type `LineItem` from type `Variant` to `ProductVariant`
- :warning: changed property `quantity` of type `LineItem` from type `integer` to `number`
- :warning: changed property `addedAt` of type `LineItem` from type `string` to `datetime`
- :warning: changed property `centAmount` of type `Money` from type `integer` to `number`
- :warning: changed property `createdAt` of type `Parcel` from type `string` to `datetime`
- :warning: changed property `heightInMillimeter` of type `ParcelMeasurements` from type `integer` to `number`
- :warning: changed property `lengthInMillimeter` of type `ParcelMeasurements` from type `integer` to `number`
- :warning: changed property `widthInMillimeter` of type `ParcelMeasurements` from type `integer` to `number`
- :warning: changed property `weightInGram` of type `ParcelMeasurements` from type `integer` to `number`
- :warning: changed property `payments` of type `PaymentInfo` from type `Reference[]` to `PaymentReference[]`
- :warning: changed property `value` of type `Price` from type `Money` to `TypedMoney`
- :warning: changed property `productSelection` of type `ProductSelectionSetting` from type `Reference` to `ProductSelectionReference`
- :warning: changed property `restockableInDays` of type `ProductVariantAvailability` from type `integer` to `number`
- :warning: changed property `availableQuantity` of type `ProductVariantAvailability` from type `integer` to `number`
- :warning: changed property `restockableInDays` of type `ProductVariantChannelAvailability` from type `integer` to `number`
- :warning: changed property `availableQuantity` of type `ProductVariantChannelAvailability` from type `integer` to `number`
- :warning: changed property `previousValue` of type `RemoveDeliveryItemsChange` from type `Delivery` to `DeliveryChangeValue`
- :warning: changed property `previousValue` of type `RemoveEnumValuesChange` from type `EnumValue` to `AttributePlainEnumValue`
- :warning: changed property `previousValue` of type `RemoveLocalizedEnumValuesChange` from type `LocalizedEnumValue` to `AttributeLocalizedEnumValue`
- :warning: changed property `previousValue` of type `RemoveShoppingListLineItemChange` from type `LineItem` to `ShoppingListLineItem`
- :warning: changed property `nextValue` of type `RemoveShoppingListLineItemChange` from type `LineItem` to `ShoppingListLineItem`
- :warning: changed property `returnDate` of type `ReturnInfo` from type `string` to `datetime`
- :warning: changed property `quantity` of type `ReturnItem` from type `integer` to `number`
- :warning: changed property `lastModifiedAt` of type `ReturnItem` from type `string` to `datetime`
- :warning: changed property `createdAt` of type `ReturnItem` from type `string` to `datetime`
- :warning: changed property `averageRating` of type `ReviewRatingStatistics` from type `integer` to `number`
- :warning: changed property `highestRating` of type `ReviewRatingStatistics` from type `integer` to `number`
- :warning: changed property `lowestRating` of type `ReviewRatingStatistics` from type `integer` to `number`
- :warning: changed property `previousValue` of type `SetAttributeChange` from type `AttributeValue` to `Attribute`
- :warning: changed property `nextValue` of type `SetAttributeChange` from type `AttributeValue` to `Attribute`
- :warning: changed property `previousValue` of type `SetCustomLineItemTaxedPriceChange` from type `Money` to `TaxedItemPrice`
- :warning: changed property `nextValue` of type `SetCustomLineItemTaxedPriceChange` from type `Money` to `TaxedItemPrice`
- :warning: changed property `previousValue` of type `SetDiscountedPriceChange` from type `Price` to `DiscountedPrice`
- :warning: changed property `nextValue` of type `SetDiscountedPriceChange` from type `Price` to `DiscountedPrice`
- :warning: changed property `previousValue` of type `SetOrderTaxedPriceChange` from type `TaxedItemPrice` to `TaxedPrice`
- :warning: changed property `nextValue` of type `SetOrderTaxedPriceChange` from type `TaxedItemPrice` to `TaxedPrice`
- :warning: changed property `previousValue` of type `SetShippingInfoTaxedPriceChange` from type `TaxedPrice` to `TaxedItemPrice`
- :warning: changed property `nextValue` of type `SetShippingInfoTaxedPriceChange` from type `TaxedPrice` to `TaxedItemPrice`
- :warning: changed property `previousValue` of type `SetShippingRateChange` from type `Money` to `ShippingRate`
- :warning: changed property `nextValue` of type `SetShippingRateChange` from type `Money` to `ShippingRate`
- :warning: changed property `previousValue` of type `SetStoreChange` from type `Reference` to `KeyReference`
- :warning: changed property `nextValue` of type `SetStoreChange` from type `Reference` to `KeyReference`
- :warning: changed property `price` of type `ShippingRate` from type `Money` to `CentPrecisionMoney`
- :warning: changed property `freeAbove` of type `ShippingRate` from type `Money` to `CentPrecisionMoney`
- :warning: changed property `amount` of type `SubRate` from type `integer` to `number`
- :warning: changed property `channel` of type `SyncInfo` from type `Reference` to `ChannelReference`
- :warning: changed property `syncedAt` of type `SyncInfo` from type `string` to `datetime`
- :warning: changed property `amount` of type `TaxRate` from type `integer` to `number`
- :warning: changed property `totalNet` of type `TaxedItemPrice` from type `Money` to `CentPrecisionMoney`
- :warning: changed property `totalGross` of type `TaxedItemPrice` from type `Money` to `CentPrecisionMoney`
- :warning: changed property `totalNet` of type `TaxedPrice` from type `Money` to `CentPrecisionMoney`
- :warning: changed property `totalGross` of type `TaxedPrice` from type `Money` to `CentPrecisionMoney`
- :warning: changed property `addedAt` of type `TextLineItem` from type `string` to `datetime`
- :warning: changed property `quantity` of type `TextLineItem` from type `integer` to `number`
- :warning: changed property `timestamp` of type `Transaction` from type `string` to `datetime`
- :warning: changed property `amount` of type `Transaction` from type `Money` to `CentPrecisionMoney`
</details>


<details>
<summary>Removed Property(s)</summary>

- :warning: removed property `/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/` from type `CategoryOrderHints`
- :warning: removed property `variantId` from type `LineItem`
- :warning: removed property `fractionDigits` from type `Money`
- :warning: removed property `type` from type `Money`
- :warning: removed property `//` from type `ProductVariantChannelAvailabilityMap`
- :warning: removed property `skus` from type `ProductVariantSelection`
</details>


<details>
<summary>Added Property(s)</summary>

- added property `catalogData` to type `AddAssetChange`
- added property `variant` to type `AddAssetChange`
- added property `attributeName` to type `AddEnumValueChange`
- added property `variant` to type `AddExternalImageChange`
- added property `variant` to type `AddPriceChange`
- added property `catalogData` to type `AddToCategoryChange`
- added property `custom` to type `Address`
- added property `sources` to type `Asset`
- added property `tags` to type `Asset`
- added property `roles` to type `Associate`
- added property `level` to type `AttributeDefinition`
- added property `/^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$/` to type `CategoryOrderHints`
- added property `catalogData` to type `ChangeAssetNameChange`
- added property `variant` to type `ChangeAssetNameChange`
- added property `catalogData` to type `ChangeAssetOrderChange`
- added property `variant` to type `ChangeAssetOrderChange`
- added property `addedItems` to type `ChangeCartDiscountsChange`
- added property `removedItems` to type `ChangeCartDiscountsChange`
- added property `attributeName` to type `ChangeEnumValueLabelChange`
- added property `attributeName` to type `ChangeEnumValueOrderChange`
- added property `addedItems` to type `ChangeGroupsChange`
- added property `removedItems` to type `ChangeGroupsChange`
- added property `variant` to type `ChangePriceChange`
- added property `catalogData` to type `ChangeSlugChange`
- added property `key` to type `CustomLineItem`
- added property `taxedPricePortions` to type `CustomLineItem`
- added property `state` to type `CustomLineItem`
- added property `taxCategory` to type `CustomLineItem`
- added property `taxRate` to type `CustomLineItem`
- added property `perMethodTaxRate` to type `CustomLineItem`
- added property `discountedPricePerQuantity` to type `CustomLineItem`
- added property `custom` to type `CustomLineItem`
- added property `shippingDetails` to type `CustomLineItem`
- added property `priceMode` to type `CustomLineItem`
- added property `recurrenceInfo` to type `CustomLineItem`
- added property `key` to type `Delivery`
- added property `required` to type `FieldDefinition`
- added property `shippingMethodKey` to type `ItemShippingTarget`
- added property `key` to type `LineItem`
- added property `productKey` to type `LineItem`
- added property `price` to type `LineItem`
- added property `totalPrice` to type `LineItem`
- added property `discountedPricePerQuantity` to type `LineItem`
- added property `taxedPrice` to type `LineItem`
- added property `taxedPricePortions` to type `LineItem`
- added property `state` to type `LineItem`
- added property `taxRate` to type `LineItem`
- added property `perMethodTaxRate` to type `LineItem`
- added property `supplyChannel` to type `LineItem`
- added property `distributionChannel` to type `LineItem`
- added property `priceMode` to type `LineItem`
- added property `lineItemMode` to type `LineItem`
- added property `inventoryMode` to type `LineItem`
- added property `shippingDetails` to type `LineItem`
- added property `lastModifiedAt` to type `LineItem`
- added property `recurrenceInfo` to type `LineItem`
- added property `variant` to type `MoveImageToPositionChange`
- added property `key` to type `Parcel`
- added property `custom` to type `Parcel`
- added property `key` to type `Price`
- added property `country` to type `Price`
- added property `customerGroup` to type `Price`
- added property `channel` to type `Price`
- added property `validFrom` to type `Price`
- added property `validUntil` to type `Price`
- added property `discounted` to type `Price`
- added property `tiers` to type `Price`
- added property `custom` to type `Price`
- added property `recurrencePolicy` to type `Price`
- added property `id` to type `ProductVariantAvailability`
- added property `version` to type `ProductVariantAvailability`
- added property `id` to type `ProductVariantChannelAvailability`
- added property `version` to type `ProductVariantChannelAvailability`
- added property `/^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$/` to type `ProductVariantChannelAvailabilityMap`
- added property `catalogData` to type `RemoveAssetChange`
- added property `variant` to type `RemoveAssetChange`
- added property `catalogData` to type `RemoveFromCategoryChange`
- added property `variant` to type `RemoveImageChange`
- added property `variant` to type `RemovePriceChange`
- added property `key` to type `ReturnItem`
- added property `custom` to type `ReturnItem`
- added property `catalogData` to type `SetAssetCustomFieldChange`
- added property `variant` to type `SetAssetCustomFieldChange`
- added property `catalogData` to type `SetAssetCustomTypeChange`
- added property `variant` to type `SetAssetCustomTypeChange`
- added property `catalogData` to type `SetAssetDescriptionChange`
- added property `variant` to type `SetAssetDescriptionChange`
- added property `catalogData` to type `SetAssetKeyChange`
- added property `variant` to type `SetAssetKeyChange`
- added property `catalogData` to type `SetAssetSourcesChange`
- added property `variant` to type `SetAssetSourcesChange`
- added property `catalogData` to type `SetAssetTagsChange`
- added property `variant` to type `SetAssetTagsChange`
- added property `variant` to type `SetAttributeChange`
- added property `addedItems` to type `SetChannelRolesChange`
- added property `removedItems` to type `SetChannelRolesChange`
- added property `addedItems` to type `SetCountriesChange`
- added property `removedItems` to type `SetCountriesChange`
- added property `customTypeId` to type `SetCustomLineItemCustomFieldChange`
- added property `customLineItem` to type `SetCustomLineItemShippingDetailsChange`
- added property `price` to type `SetDiscountedPriceChange`
- added property `addedItems` to type `SetDistributionChannelsChange`
- added property `removedItems` to type `SetDistributionChannelsChange`
- added property `variant` to type `SetImageLabelChange`
- added property `addedItems` to type `SetLanguagesChange`
- added property `removedItems` to type `SetLanguagesChange`
- added property `lineItemId` to type `SetLineItemDiscountedPriceChange`
- added property `lineItemId` to type `SetLineItemDiscountedPricePerQuantityChange`
- added property `lineItemId` to type `SetLineItemPriceChange`
- added property `lineItemId` to type `SetLineItemProductSlugChange`
- added property `lineItem` to type `SetLineItemShippingDetailsChange`
- added property `variant` to type `SetLineItemShippingDetailsChange`
- added property `lineItemId` to type `SetLineItemTaxAmountChange`
- added property `lineItemId` to type `SetLineItemTaxRateChange`
- added property `variant` to type `SetLineItemTaxedPriceChange`
- added property `lineItemId` to type `SetLineItemTotalPriceChange`
- added property `variant` to type `SetLineItemTotalPriceChange`
- added property `catalogData` to type `SetMetaDescriptionChange`
- added property `catalogData` to type `SetMetaKeywordsChange`
- added property `catalogData` to type `SetMetaTitleChange`
- added property `lineItemId` to type `SetOrderLineItemCustomFieldChange`
- added property `lineItemId` to type `SetOrderLineItemCustomTypeChange`
- added property `addedItems` to type `SetPermissionsChange`
- added property `removedItems` to type `SetPermissionsChange`
- added property `addedItems` to type `SetPricesChange`
- added property `removedItems` to type `SetPricesChange`
- added property `variant` to type `SetProductPriceCustomFieldChange`
- added property `priceId` to type `SetProductPriceCustomFieldChange`
- added property `customTypeId` to type `SetProductPriceCustomFieldChange`
- added property `name` to type `SetProductPriceCustomFieldChange`
- added property `variant` to type `SetProductPriceCustomTypeChange`
- added property `priceId` to type `SetProductPriceCustomTypeChange`
- added property `addedItems` to type `SetProductSelectionsChange`
- added property `removedItems` to type `SetProductSelectionsChange`
- added property `variant` to type `SetProductVariantKeyChange`
- added property `addedItems` to type `SetReservationsChange`
- added property `removedItems` to type `SetReservationsChange`
- added property `variant` to type `SetSkuChange`
- added property `addedItems` to type `SetStateRolesChange`
- added property `removedItems` to type `SetStateRolesChange`
- added property `addedItems` to type `SetStoresChange`
- added property `removedItems` to type `SetStoresChange`
- added property `addedItems` to type `SetSupplyChannelsChange`
- added property `removedItems` to type `SetSupplyChannelsChange`
- added property `addedItems` to type `SetTransitionsChange`
- added property `removedItems` to type `SetTransitionsChange`
- added property `key` to type `TaxRate`
- added property `taxPortions` to type `TaxedItemPrice`
- added property `totalTax` to type `TaxedItemPrice`
- added property `taxPortions` to type `TaxedPrice`
- added property `totalTax` to type `TaxedPrice`
- added property `key` to type `TextLineItem`
- added property `custom` to type `Transaction`
- added property `customLineItemId` to type `TransitionCustomLineItemStateChange`
</details>

**Checkout changes**

<details>
<summary>Added Type(s)</summary>

- added type `AllowedOrigins`
- added type `Application`
- added type `ApplicationAgreement`
- added type `ApplicationAgreementDraft`
- added type `ApplicationAgreementStatus`
- added type `ApplicationAgreementType`
- added type `ApplicationDraft`
- added type `ApplicationLogo`
- added type `ApplicationMode`
- added type `ApplicationStatus`
- added type `ApplicationUpdateAction`
- added type `ApplicationUpdateActions`
- added type `DiscountsConfiguration`
- added type `PaginatedApplication`
- added type `PaymentsConfiguration`
- added type `AddAllowedOriginUpdateAction`
- added type `AddApplicationAgreementUpdateAction`
- added type `AddCountryUpdateAction`
- added type `RemoveAllowedOriginUpdateAction`
- added type `RemoveApplicationAgreementUpdateAction`
- added type `RemoveCountryUpdateAction`
- added type `ReorderApplicationAgreementUpdateAction`
- added type `SetActivePaymentComponentTypeUpdateAction`
- added type `SetAllowAllOriginsUpdateAction`
- added type `SetAllowedOriginsUpdateAction`
- added type `SetApplicationAgreementNameUpdateAction`
- added type `SetApplicationAgreementStatusUpdateAction`
- added type `SetApplicationAgreementTextUpdateAction`
- added type `SetApplicationAgreementTypeUpdateAction`
- added type `SetApplicationAgreementsUpdateAction`
- added type `SetApplicationLogoUpdateAction`
- added type `SetApplicationNameUpdateAction`
- added type `SetApplicationStatusUpdateAction`
- added type `SetCountriesUpdateAction`
- added type `SetDescriptionUpdateAction`
- added type `SetDiscountsConfigurationUpdateAction`
- added type `SetPaymentReturnUrlUpdateAction`
- added type `SetPaymentsConfigurationUpdateAction`
- added type `CreatedBy`
- added type `LastModifiedBy`
- added type `LocalizedString`
- added type `LocalizedUrl`
- added type `ConcurrentModificationError`
- added type `DuplicateFieldWithConflictingResourceError`
- added type `ErrorResponse`
- added type `InvalidFieldError`
- added type `InvalidOperationError`
- added type `MaxResourceLimitExceededError`
- added type `MissingProjectKeyError`
- added type `ReferencedResourceNotFoundError`
- added type `ServiceUnavailableError`
- added type `SyntaxErrorError`
- added type `AutomatedReversalConfiguration`
- added type `ConnectorDeploymentReference`
- added type `DisplayInfo`
- added type `PaginatedPaymentIntegration`
- added type `PaymentComponentType`
- added type `PaymentIntegration`
- added type `PaymentIntegrationDraft`
- added type `PaymentIntegrationStatus`
- added type `PaymentIntegrationType`
- added type `SortingInfo`
- added type `PaymentIntegrationUpdateAction`
- added type `PaymentIntegrationUpdateActions`
- added type `SetAutomatedReversalConfigurationPredicateUpdateAction`
- added type `SetAutomatedReversalConfigurationStatusUpdateAction`
- added type `SetAutomatedReversalConfigurationUpdateAction`
- added type `SetConnectorDeploymentUpdateAction`
- added type `SetDisplayInfoDescriptionUpdateAction`
- added type `SetDisplayInfoLabelUpdateAction`
- added type `SetDisplayInfoLogoUrlUpdateAction`
- added type `SetDisplayInfoPayButtonTextUpdateAction`
- added type `SetDisplayInfoUpdateAction`
- added type `SetKeyUpdateAction`
- added type `SetNameUpdateAction`
- added type `SetPredicateUpdateAction`
- added type `SetSortingInfoUpdateAction`
- added type `SetStatusUpdateAction`
- added type `SetTypeUpdateAction`
- added type `PaymentIntentReverseAction`
- added type `ConnectorError`
- added type `ErrorLoadingAllPaymentIntegrations`
- added type `ExpressContainerNotFound`
- added type `ExpressMultipleContainersFound`
- added type `ExpressPaymentCancelled`
- added type `ExpressPaymentCompleted`
- added type `ExpressPaymentFailed`
- added type `ExpressPaymentIntegrationNotAvailable`
- added type `ExpressPaymentInterrupted`
- added type `ExpressPaymentStarted`
- added type `FailedToRefreshSession`
- added type `GiftCardBalanceError`
- added type `GiftCardBalanceRemoved`
- added type `GiftCardBalanceStarted`
- added type `GiftCardBalanceSuccess`
- added type `GiftCardRedeemError`
- added type `GiftCardRedeemStarted`
- added type `GiftCardRedeemSuccess`
- added type `NoExpressPaymentIntegrations`
- added type `NoPaymentIntegrations`
- added type `NonOrderableCartError`
- added type `NotApplicableDiscountCodeRemoved`
- added type `OrderVerificationRetryError`
- added type `OrderVerificationStarted`
- added type `OrderVerificationTimeout`
- added type `PaymentIntegrationLoaded`
- added type `PaymentIntegrationLoading`
- added type `PaymentIntegrationLoadingError`
- added type `PaymentIntegrationNotAvailable`
- added type `PaymentIntegrationSelected`
- added type `PaymentIntegrationSelectionConfirmation`
- added type `PaymentIntegrationSelectionConfirmationFailed`
- added type `PaymentIntegrationsReceived`
- added type `ShippingMethodSelected`
- added type `ShippingMethodSelectionConfirmation`
</details>


<details>
<summary>Changed Type(s)</summary>

- :warning: changed type `PaymentIntentCancelAction` from type `object` to `PaymentIntentAction`
- :warning: changed type `PaymentIntentCaptureAction` from type `object` to `PaymentIntentAction`
- :warning: changed type `PaymentIntentRefundAction` from type `object` to `PaymentIntentAction`
- :warning: changed type `PaymentCancelled` from type `Message` to `ResponseMessage`
- :warning: changed type `PaymentFailed` from type `Message` to `ResponseMessage`
- :warning: changed type `PaymentValidationFailed` from type `Message` to `ResponseMessage`
- :warning: changed type `TransactionItem` from type `TransactionItemDraft` to `object`
</details>


<details>
<summary>Removed Type(s)</summary>

- :warning: removed type `NoPaymentMethods`
- :warning: removed type `PaymentConnectorError`
- :warning: removed type `PaymentMethodLoaded`
- :warning: removed type `PaymentMethodLoading`
- :warning: removed type `PaymentMethodLoadingError`
- :warning: removed type `PaymentMethodSelected`
- :warning: removed type `PaymentMethodSelectionConfirmation`
- :warning: removed type `PaymentMethodSelectionConfirmationFailed`
- :warning: removed type `PaymentMethodsReceived`
- :warning: removed type `PaymentVerificationStarted`
- :warning: removed type `PaymentVerificationTimeout`
</details>


<details>
<summary>Added Enum(s)</summary>

- added enum `deployment` to type `ReferenceTypeId`
- added enum `reversePayment` to type `PaymentIntentOperation`
</details>


<details>
<summary>Required Property(s)</summary>

- changed property `detailedErrorMessage` of type `InvalidJsonInputError` to be optional
- :warning: changed property `amount` of type `PaymentIntentRefundAction` to be required
</details>


<details>
<summary>Changed Property(s)</summary>

- :warning: changed property `action` of type `PaymentIntentCancelAction` from type `string` to `PaymentIntentOperation`
- :warning: changed property `action` of type `PaymentIntentCaptureAction` from type `string` to `PaymentIntentOperation`
- :warning: changed property `action` of type `PaymentIntentRefundAction` from type `string` to `PaymentIntentOperation`
- :warning: changed property `application` of type `Transaction` from type `ApplicationResourceIdentifier` to `ApplicationReference`
</details>


<details>
<summary>Removed Property(s)</summary>

- :warning: removed property `payload` from type `ResponseMessage`
- :warning: removed property `amount` from type `PaymentIntentAction`
</details>


<details>
<summary>Added Property(s)</summary>

- added property `resourceIdentifier` to type `ResourceNotFoundError`
- added property `resourceId` to type `ResourceNotFoundError`
- added property `merchantReference` to type `PaymentIntentCancelAction`
- added property `merchantReference` to type `PaymentIntentCaptureAction`
- added property `transactionId` to type `PaymentIntentRefundAction`
- added property `merchantReference` to type `PaymentIntentRefundAction`
- added property `payload` to type `PaymentCancelled`
- added property `payload` to type `PaymentFailed`
- added property `payload` to type `PaymentValidationFailed`
</details>


<details>
<summary>Changed MethodResponseBody(s)</summary>

- :warning: changed response body for `400: application/json` of method `post /{projectKey}/transactions` from type `null` to `ErrorResponse`
- :warning: changed response body for `400: application/json` of method `post /{projectKey}/payment-intents/{paymentId}` from type `null` to `ErrorResponse`
- :warning: changed response body for `400: application/json` of method `get /{projectKey}/transactions/{id}` from type `null` to `ErrorResponse`
- :warning: changed response body for `400: application/json` of method `get /{projectKey}/transactions/key={key}` from type `null` to `ErrorResponse`
</details>


<details>
<summary>Added Method(s)</summary>

- added method `$apiRoot->withProjectKey()->paymentIntegrations()->get()`
- added method `$apiRoot->withProjectKey()->paymentIntegrations()->post()`
- added method `$apiRoot->withProjectKey()->applications()->get()`
- added method `$apiRoot->withProjectKey()->applications()->post()`
- added method `$apiRoot->withProjectKey()->paymentIntegrations()->withId()->get()`
- added method `$apiRoot->withProjectKey()->paymentIntegrations()->withId()->head()`
- added method `$apiRoot->withProjectKey()->paymentIntegrations()->withId()->post()`
- added method `$apiRoot->withProjectKey()->paymentIntegrations()->withId()->delete()`
- added method `$apiRoot->withProjectKey()->paymentIntegrations()->withKey()->get()`
- added method `$apiRoot->withProjectKey()->paymentIntegrations()->withKey()->post()`
- added method `$apiRoot->withProjectKey()->paymentIntegrations()->withKey()->head()`
- added method `$apiRoot->withProjectKey()->paymentIntegrations()->withKey()->delete()`
- added method `$apiRoot->withProjectKey()->applications()->withId()->get()`
- added method `$apiRoot->withProjectKey()->applications()->withId()->head()`
- added method `$apiRoot->withProjectKey()->applications()->withId()->post()`
- added method `$apiRoot->withProjectKey()->applications()->withId()->delete()`
- added method `$apiRoot->withProjectKey()->applications()->withKey()->get()`
- added method `$apiRoot->withProjectKey()->applications()->withKey()->post()`
- added method `$apiRoot->withProjectKey()->applications()->withKey()->head()`
- added method `$apiRoot->withProjectKey()->applications()->withKey()->delete()`
</details>


<details>
<summary>Added Resource(s)</summary>

- added resource `/{projectKey}/payment-integrations`
- added resource `/{projectKey}/applications`
- added resource `/{projectKey}/payment-integrations/{id}`
- added resource `/{projectKey}/payment-integrations/key={key}`
- added resource `/{projectKey}/applications/{id}`
- added resource `/{projectKey}/applications/key={key}`
</details>

