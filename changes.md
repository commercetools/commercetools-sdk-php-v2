**Api changes**

<details>
<summary>Required Property(s)</summary>

- changed property `sortOrder` of type `CartDiscountDraft` to be optional
- changed property `images` of type `ProductTailoringSetExternalImagesAction` to be optional
- changed property `facets` of type `ProductProjectionPagedSearchResponse` to be optional
- :warning: changed property `triggerPattern` of type `CartDiscountPatternTarget` to be required
</details>


<details>
<summary>MarkDeprecated Property(s)</summary>

- marked property `CountOnCustomLineItemUnits::excludeCount` as deprecated
- marked property `CountOnLineItemUnits::excludeCount` as deprecated
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
<summary>Added Property(s)</summary>

- added property `inheritedStores` to type `BusinessUnit`
- added property `inheritedStores` to type `Company`
- added property `inheritedStores` to type `Division`
- added property `makeInheritedAssociatesExplicit` to type `BusinessUnitChangeAssociateModeAction`
- added property `discountGroup` to type `CartDiscount`
- added property `discountGroup` to type `CartDiscountDraft`
- added property `priceRoundingMode` to type `Cart`
- added property `discountTypeCombination` to type `Cart`
- added property `priceRoundingMode` to type `CartDraft`
- added property `recurrenceInfo` to type `CustomLineItem`
- added property `recurrenceInfo` to type `CustomLineItemDraft`
- added property `recurrenceInfo` to type `LineItem`
- added property `recurrenceInfo` to type `LineItemDraft`
- added property `recurrenceInfo` to type `CartAddCustomLineItemAction`
- added property `recurrenceInfo` to type `CartAddLineItemAction`
- added property `recurrencePolicy` to type `Price`
- added property `recurrencePolicy` to type `PriceDraft`
- added property `customerGroupAssignments` to type `Customer`
- added property `invalidateOlderTokens` to type `CustomerCreateEmailToken`
- added property `invalidateOlderTokens` to type `CustomerCreatePasswordResetToken`
- added property `customerGroupAssignments` to type `CustomerDraft`
- added property `invalidateOlderTokens` to type `CustomerToken`
- added property `recurrenceInfo` to type `MyLineItemDraft`
- added property `recurrenceInfo` to type `MyCartAddLineItemAction`
- added property `value` to type `CustomerEmailTokenCreatedMessage`
- added property `invalidateOlderTokens` to type `CustomerEmailTokenCreatedMessage`
- added property `value` to type `CustomerPasswordTokenCreatedMessage`
- added property `invalidateOlderTokens` to type `CustomerPasswordTokenCreatedMessage`
- added property `attributes` to type `ProductTailoringCreatedMessage`
- added property `value` to type `CustomerEmailTokenCreatedMessagePayload`
- added property `invalidateOlderTokens` to type `CustomerEmailTokenCreatedMessagePayload`
- added property `value` to type `CustomerPasswordTokenCreatedMessagePayload`
- added property `invalidateOlderTokens` to type `CustomerPasswordTokenCreatedMessagePayload`
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
- added property `priceRoundingMode` to type `QuoteRequest`
- added property `priceRoundingMode` to type `Quote`
- added property `businessUnit` to type `ShoppingList`
- added property `businessUnit` to type `ShoppingListDraft`
- added property `published` to type `ShoppingListLineItem`
- added property `recurrencePolicy` to type `StandalonePrice`
- added property `recurrencePolicy` to type `StandalonePriceDraft`
- added property `events` to type `Subscription`
- added property `events` to type `SubscriptionDraft`
</details>


<details>
<summary>Removed Property(s)</summary>

- :warning: removed property `/[0-9].[0-9]*[1-9]/` from type `CategoryOrderHints`
- :warning: removed property `//` from type `ProductVariantChannelAvailabilityMap`
</details>


<details>
<summary>Added Type(s)</summary>

- added type `BusinessUnitAssociateResponse`
- added type `BusinessUnitSetUnitTypeAction`
- added type `CartDiscountSetDiscountGroupAction`
- added type `BestDeal`
- added type `DiscountTypeCombination`
- added type `Stacking`
- added type `CartChangePriceRoundingModeAction`
- added type `CartSetCustomLineItemRecurrenceInfoAction`
- added type `CartSetLineItemRecurrenceInfoAction`
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
- added type `DiscountGroupSetKeyAction`
- added type `DiscountGroupSetNameAction`
- added type `DiscountGroupSetSortOrderAction`
- added type `ExpiredCustomerEmailTokenError`
- added type `ExpiredCustomerPasswordTokenError`
- added type `GraphQLExpiredCustomerEmailTokenError`
- added type `GraphQLExpiredCustomerPasswordTokenError`
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
- added type `MyCartSetCustomLineItemRecurrenceInfoAction`
- added type `MyCartSetLineItemRecurrenceInfoAction`
- added type `MyPaymentSetMethodInfoCustomFieldAction`
- added type `MyPaymentSetMethodInfoCustomTypeAction`
- added type `MyPaymentSetMethodInfoInterfaceAccountAction`
- added type `AssociateRoleNameSetMessage`
- added type `BusinessUnitTopLevelUnitSetMessage`
- added type `BusinessUnitTypeSetMessage`
- added type `CustomerGroupAssignmentAddedMessage`
- added type `CustomerGroupAssignmentRemovedMessage`
- added type `CustomerGroupAssignmentsSetMessage`
- added type `DiscountGroupCreatedMessage`
- added type `DiscountGroupDeletedMessage`
- added type `DiscountGroupKeySetMessage`
- added type `DiscountGroupSortOrderSetMessage`
- added type `OrderBusinessUnitSetMessage`
- added type `OrderCreatedFromRecurringOrderMessage`
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
- added type `RecurringOrderCreatedMessage`
- added type `RecurringOrderCustomFieldAddedMessage`
- added type `RecurringOrderCustomFieldChangedMessage`
- added type `RecurringOrderCustomFieldRemovedMessage`
- added type `RecurringOrderCustomTypeRemovedMessage`
- added type `RecurringOrderCustomTypeSetMessage`
- added type `RecurringOrderDeletedMessage`
- added type `RecurringOrderKeySetMessage`
- added type `RecurringOrderScheduleSetMessage`
- added type `RecurringOrderStartsAtSetMessage`
- added type `RecurringOrderStateChangedMessage`
- added type `RecurringOrderStateTransitionMessage`
- added type `AssociateRoleNameSetMessagePayload`
- added type `BusinessUnitTopLevelUnitSetMessagePayload`
- added type `BusinessUnitTypeSetMessagePayload`
- added type `CustomerGroupAssignmentAddedMessagePayload`
- added type `CustomerGroupAssignmentRemovedMessagePayload`
- added type `CustomerGroupAssignmentsSetMessagePayload`
- added type `DiscountGroupCreatedMessagePayload`
- added type `DiscountGroupDeletedMessagePayload`
- added type `DiscountGroupKeySetMessagePayload`
- added type `DiscountGroupSortOrderSetMessagePayload`
- added type `OrderBusinessUnitSetMessagePayload`
- added type `OrderCreatedFromRecurringOrderMessagePayload`
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
- added type `RecurringOrderCreatedMessagePayload`
- added type `RecurringOrderCustomFieldAddedMessagePayload`
- added type `RecurringOrderCustomFieldChangedMessagePayload`
- added type `RecurringOrderCustomFieldRemovedMessagePayload`
- added type `RecurringOrderCustomTypeRemovedMessagePayload`
- added type `RecurringOrderCustomTypeSetMessagePayload`
- added type `RecurringOrderDeletedMessagePayload`
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
- added type `ProductSearchFacetResultStats`
- added type `ProductSearchFacetStatsExpression`
- added type `ProductSearchFacetStatsValue`
- added type `ProductTailoringSetProductAttributeAction`
- added type `AttributeLevelEnum`
- added type `ProductSetProductAttributeAction`
- added type `ProjectChangePriceRoundingModeAction`
- added type `ProjectChangeTaxRoundingModeAction`
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
- added type `RecurringOrderSetKeyAction`
- added type `RecurringOrderSetOrderSkipConfigurationAction`
- added type `RecurringOrderSetScheduleAction`
- added type `RecurringOrderSetStartsAtAction`
- added type `RecurringOrderSetStateAction`
- added type `RecurringOrderTransitionStateAction`
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
<summary>Removed Type(s)</summary>

- :warning: removed type `AssociateRoleNameChangedMessage`
- :warning: removed type `AssociateRoleNameChangedMessagePayload`
- :warning: removed type `ProductSearchFacetScope`
</details>


<details>
<summary>Removed QueryParameter(s)</summary>

- :warning: removed query parameter `withTotal` from method `get /{projectKey}/product-projections/search`
</details>


<details>
<summary>Added QueryParameter(s)</summary>

- added query parameter `priceCustomerGroupAssignments` to method `get /{projectKey}/products`
- added query parameter `priceRecurrencePolicy` to method `get /{projectKey}/products`
- added query parameter `priceCustomerGroupAssignments` to method `post /{projectKey}/products`
- added query parameter `priceRecurrencePolicy` to method `post /{projectKey}/products`
- added query parameter `priceCustomerGroupAssignments` to method `get /{projectKey}/product-projections`
- added query parameter `priceRecurrencePolicy` to method `get /{projectKey}/product-projections`
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
- added query parameter `priceCustomerGroupAssignments` to method `get /{projectKey}/product-projections/{ID}`
- added query parameter `priceRecurrencePolicy` to method `get /{projectKey}/product-projections/{ID}`
- added query parameter `priceCustomerGroupAssignments` to method `get /{projectKey}/in-store/key={storeKey}/product-projections/key={key}`
- added query parameter `priceRecurrencePolicy` to method `get /{projectKey}/in-store/key={storeKey}/product-projections/key={key}`
- added query parameter `priceCustomerGroupAssignments` to method `get /{projectKey}/in-store/key={storeKey}/product-projections/{ID}`
- added query parameter `priceRecurrencePolicy` to method `get /{projectKey}/in-store/key={storeKey}/product-projections/{ID}`
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
- added method `$apiRoot->withProjectKey()->recurrencePolicies()->withId()->get()`
- added method `$apiRoot->withProjectKey()->recurrencePolicies()->withId()->head()`
- added method `$apiRoot->withProjectKey()->recurrencePolicies()->withId()->post()`
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
- added enum `recurrence-policy` to type `ChangeSubscriptionResourceTypeId`
- added enum `recurring-order` to type `ChangeSubscriptionResourceTypeId`
- added enum `recurring-order` to type `ResourceTypeId`
</details>

**Import changes**

<details>
<summary>Added Type(s)</summary>

- added type `StrategyEnum`
- added type `RetentionPolicy`
- added type `TimeToLiveConfig`
- added type `TimeToLiveRetentionPolicy`
- added type `ProductSelectionImportRequest`
- added type `AttributeLevel`
- added type `VariantSelectionType`
- added type `VariantSelection`
- added type `VariantExclusion`
- added type `ProductSelectionAssignment`
- added type `ProductSelectionMode`
- added type `ProductSelectionImport`
</details>


<details>
<summary>Added Method(s)</summary>

- added method `$apiRoot->withProjectKeyValue()->productSelections()->importContainers()->withImportContainerKeyValue()->post()`
</details>


<details>
<summary>Added Resource(s)</summary>

- added resource `/{projectKey}/product-selections`
- added resource `/{projectKey}/product-selections/import-containers`
- added resource `/{projectKey}/product-selections/import-containers/{importContainerKey}`
</details>


<details>
<summary>Changed Property(s)</summary>

- :warning: changed property `country` of type `ExternalTaxRateDraft` from type `string` to `CountryCode`
- :warning: changed property `value` of type `MoneySetField` from type `Money[]` to `TypedMoney[]`
</details>


<details>
<summary>Added Property(s)</summary>

- added property `retentionPolicy` to type `ImportContainer`
- added property `expiresAt` to type `ImportContainer`
- added property `retentionPolicy` to type `ImportContainerDraft`
- added property `/^[a-zA-Z]{2,3}(?:-[a-zA-Z]{4})?(?:-(?:[a-zA-Z]{2}|\d{3}))?$/` to type `SearchKeywords`
- added property `attributes` to type `ProductImport`
- added property `attributes` to type `ProductDraftImport`
- added property `level` to type `AttributeDefinition`
- added property `/^[a-zA-Z]{2,3}(?:-[a-zA-Z]{4})?(?:-(?:[a-zA-Z]{2}|\d{3}))?$/` to type `LocalizedString`
</details>


<details>
<summary>Removed Property(s)</summary>

- :warning: removed property `/^[a-z]{2}(-[A-Z]{2})?$/` from type `SearchKeywords`
- :warning: removed property `/^[a-z]{2}(-[A-Z]{2})?$/` from type `LocalizedString`
</details>


<details>
<summary>Added Enum(s)</summary>

- added enum `product-selection` to type `ImportResourceType`
</details>

**History changes**

<details>
<summary>Added Type(s)</summary>

- added type `TooManyRequestsError`
- added type `GraphQLTooManyRequestsError`
</details>


<details>
<summary>Removed Enum(s)</summary>

- :warning: removed enum `setAsssetKey` from type `UpdateType`
</details>


<details>
<summary>Added Enum(s)</summary>

- added enum `setAssetKey` to type `UpdateType`
- added enum `ApplicationStoppedByGroupBestDeal` to type `DiscountCodeState`
- added enum `payment-method` to type `ReferenceTypeId`
- added enum `RecurringOrderState` to type `StateTypeEnum`
</details>


<details>
<summary>Required Property(s)</summary>

- :warning: changed property `triggerPattern` of type `ChangeTargetPatternChangeValue` to be required
</details>

