**Api changes**

<details>
<summary>Added Type(s)</summary>

- added type `BusinessUnitAssociateResponse`
- added type `BusinessUnitSetUnitTypeAction`
- added type `BestDeal`
- added type `DiscountTypeCombination`
- added type `Stacking`
- added type `CustomerGroupAssignment`
- added type `CustomerGroupAssignmentDraft`
- added type `CustomerAddCustomerGroupAssignmentAction`
- added type `CustomerRemoveCustomerGroupAssignmentAction`
- added type `CustomerSetCustomerGroupAssignmentsAction`
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
- added type `AssociateRoleNameSetMessage`
- added type `BusinessUnitTopLevelUnitSetMessage`
- added type `BusinessUnitTypeSetMessage`
- added type `CustomerGroupAssignmentAddedMessage`
- added type `CustomerGroupAssignmentRemovedMessage`
- added type `CustomerGroupAssignmentsSetMessage`
- added type `OrderBusinessUnitSetMessage`
- added type `AssociateRoleNameSetMessagePayload`
- added type `BusinessUnitTopLevelUnitSetMessagePayload`
- added type `BusinessUnitTypeSetMessagePayload`
- added type `CustomerGroupAssignmentAddedMessagePayload`
- added type `CustomerGroupAssignmentRemovedMessagePayload`
- added type `CustomerGroupAssignmentsSetMessagePayload`
- added type `OrderBusinessUnitSetMessagePayload`
- added type `StagedOrderSetBusinessUnitAction`
- added type `OrderSetBusinessUnitAction`
- added type `ShoppingListSetBusinessUnitAction`
- added type `EventDeliveryPayload`
- added type `EventSubscription`
- added type `EventSubscriptionResourceTypeId`
- added type `EventType`
- added type `SubscriptionNotification`
- added type `SubscriptionSetEventsAction`
</details>


<details>
<summary>Removed Type(s)</summary>

- :warning: removed type `AssociateRoleNameChangedMessage`
- :warning: removed type `AssociateRoleNameChangedMessagePayload`
- :warning: removed type `ProductSearchFacetScope`
</details>


<details>
<summary>Changed Type(s)</summary>

- :warning: changed type `DeliveryPayload` from type `object` to `SubscriptionNotification`
</details>


<details>
<summary>Added Resource(s)</summary>

- added resource `/{projectKey}/as-associate/{associateId}/in-business-unit/key={businessUnitKey}/shopping-lists`
- added resource `/{projectKey}/as-associate/{associateId}/in-business-unit/key={businessUnitKey}/shopping-lists/key={key}`
- added resource `/{projectKey}/as-associate/{associateId}/in-business-unit/key={businessUnitKey}/shopping-lists/{ID}`
- added resource `/{projectKey}/business-units/key={key}/associates/{associateId}`
- added resource `/{projectKey}/business-units/{businessUnitId}/associates/{associateId}`
- added resource `/{projectKey}/in-store/key={storeKey}/business-units`
- added resource `/{projectKey}/in-store/key={storeKey}/business-units/key={key}`
- added resource `/{projectKey}/in-store/key={storeKey}/business-units/{ID}`
- added resource `/{projectKey}/in-store/key={storeKey}/business-units/key={key}/associates/{associateId}`
- added resource `/{projectKey}/in-store/key={storeKey}/business-units/{businessUnitId}/associates/{associateId}`
</details>


<details>
<summary>Changed Property(s)</summary>

- :warning: changed property `discount` of type `DiscountedTotalPricePortion` from type `CartDiscountReference` to `Reference`
- :warning: changed property `actions` of type `MyBusinessUnitUpdate` from type `BusinessUnitUpdateAction[]` to `MyBusinessUnitUpdateAction[]`
</details>


<details>
<summary>Required Property(s)</summary>

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
<summary>Added Property(s)</summary>

- added property `inheritedStores` to type `BusinessUnit`
- added property `inheritedStores` to type `Company`
- added property `inheritedStores` to type `Division`
- added property `discountTypeCombination` to type `Cart`
- added property `customerGroupAssignments` to type `Customer`
- added property `invalidateOlderTokens` to type `CustomerCreateEmailToken`
- added property `invalidateOlderTokens` to type `CustomerCreatePasswordResetToken`
- added property `customerGroupAssignments` to type `CustomerDraft`
- added property `invalidateOlderTokens` to type `CustomerToken`
- added property `value` to type `CustomerEmailTokenCreatedMessage`
- added property `invalidateOlderTokens` to type `CustomerEmailTokenCreatedMessage`
- added property `value` to type `CustomerPasswordTokenCreatedMessage`
- added property `invalidateOlderTokens` to type `CustomerPasswordTokenCreatedMessage`
- added property `value` to type `CustomerEmailTokenCreatedMessagePayload`
- added property `invalidateOlderTokens` to type `CustomerEmailTokenCreatedMessagePayload`
- added property `value` to type `CustomerPasswordTokenCreatedMessagePayload`
- added property `invalidateOlderTokens` to type `CustomerPasswordTokenCreatedMessagePayload`
- added property `discountTypeCombination` to type `StagedOrder`
- added property `discountTypeCombination` to type `Order`
- added property `priceCustomerGroupAssignments` to type `ProductSearchProjectionParams`
- added property `businessUnit` to type `ShoppingList`
- added property `businessUnit` to type `ShoppingListDraft`
- added property `published` to type `ShoppingListLineItem`
- added property `events` to type `Subscription`
- added property `events` to type `SubscriptionDraft`
</details>


<details>
<summary>Added QueryParameter(s)</summary>

- added query parameter `priceCustomerGroupAssignments` to method `get /{projectKey}/products`
- added query parameter `priceCustomerGroupAssignments` to method `post /{projectKey}/products`
- added query parameter `priceCustomerGroupAssignments` to method `get /{projectKey}/product-projections`
- added query parameter `priceCustomerGroupAssignments` to method `get /{projectKey}/products/key={key}`
- added query parameter `priceCustomerGroupAssignments` to method `post /{projectKey}/products/key={key}`
- added query parameter `priceCustomerGroupAssignments` to method `delete /{projectKey}/products/key={key}`
- added query parameter `priceCustomerGroupAssignments` to method `get /{projectKey}/products/{ID}`
- added query parameter `priceCustomerGroupAssignments` to method `post /{projectKey}/products/{ID}`
- added query parameter `priceCustomerGroupAssignments` to method `delete /{projectKey}/products/{ID}`
- added query parameter `priceCustomerGroupAssignments` to method `get /{projectKey}/product-projections/search`
- added query parameter `priceCustomerGroupAssignments` to method `get /{projectKey}/product-projections/key={key}`
- added query parameter `priceCustomerGroupAssignments` to method `get /{projectKey}/product-projections/{ID}`
- added query parameter `priceCustomerGroupAssignments` to method `get /{projectKey}/in-store/key={storeKey}/product-projections/key={key}`
- added query parameter `priceCustomerGroupAssignments` to method `get /{projectKey}/in-store/key={storeKey}/product-projections/{ID}`
</details>


<details>
<summary>Removed QueryParameter(s)</summary>

- :warning: removed query parameter `withTotal` from method `get /{projectKey}/product-projections/search`
</details>


<details>
<summary>Added Method(s)</summary>

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
<summary>Added Enum(s)</summary>

- added enum `ViewMyShoppingLists` to type `Permission`
- added enum `ViewOthersShoppingLists` to type `Permission`
- added enum `UpdateMyShoppingLists` to type `Permission`
- added enum `UpdateOthersShoppingLists` to type `Permission`
- added enum `CreateMyShoppingLists` to type `Permission`
- added enum `CreateOthersShoppingLists` to type `Permission`
- added enum `DeleteMyShoppingLists` to type `Permission`
- added enum `DeleteOthersShoppingLists` to type `Permission`
</details>

**Import changes**

<details>
<summary>Removed Property(s)</summary>

- :warning: removed property `/^[a-z]{2}(-[A-Z]{2})?$/` from type `SearchKeywords`
- :warning: removed property `/^[a-z]{2}(-[A-Z]{2})?$/` from type `LocalizedString`
</details>


<details>
<summary>Added Property(s)</summary>

- added property `/^[a-zA-Z]{2,3}(?:-[a-zA-Z]{4})?(?:-(?:[a-zA-Z]{2}|\d{3}))?$/` to type `SearchKeywords`
- added property `/^[a-zA-Z]{2,3}(?:-[a-zA-Z]{4})?(?:-(?:[a-zA-Z]{2}|\d{3}))?$/` to type `LocalizedString`
</details>

**History changes**

<details>
<summary>Removed Enum(s)</summary>

- :warning: removed enum `setAsssetKey` from type `UpdateType`
</details>


<details>
<summary>Added Enum(s)</summary>

- added enum `setAssetKey` to type `UpdateType`
</details>


<details>
<summary>Removed Type(s)</summary>

- :warning: removed type `GraphQLErrorObject`
</details>


<details>
<summary>Changed Property(s)</summary>

- :warning: changed property `extensions` of type `GraphQLError` from type `GraphQLErrorObject` to `object`
</details>


<details>
<summary>Required Property(s)</summary>

- :warning: changed property `triggerPattern` of type `ChangeTargetPatternChangeValue` to be required
</details>

