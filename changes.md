**Api changes**

<details>
<summary>Required Property(s)</summary>

- :warning: changed property `triggerPattern` of type `CartDiscountPatternTarget` to be required
- changed property `images` of type `ProductTailoringSetExternalImagesAction` to be optional
</details>


<details>
<summary>Changed Property(s)</summary>

- :warning: changed property `discount` of type `DiscountedTotalPricePortion` from type `CartDiscountReference` to `Reference`
</details>


<details>
<summary>Added Property(s)</summary>

- added property `inheritedStores` to type `BusinessUnit`
- added property `inheritedStores` to type `Company`
- added property `inheritedStores` to type `Division`
- added property `discountTypeCombination` to type `Cart`
- added property `discountTypeCombination` to type `StagedOrder`
- added property `discountTypeCombination` to type `Order`
- added property `businessUnit` to type `ShoppingList`
- added property `businessUnit` to type `ShoppingListDraft`
</details>


<details>
<summary>MarkDeprecated Property(s)</summary>

- marked property `CountOnCustomLineItemUnits::excludeCount` as deprecated
- marked property `CountOnLineItemUnits::excludeCount` as deprecated
</details>


<details>
<summary>Added Type(s)</summary>

- added type `BusinessUnitAssociateResponse`
- added type `BestDeal`
- added type `DiscountTypeCombination`
- added type `Stacking`
- added type `AssociateRoleNameSetMessage`
- added type `AssociateRoleNameSetMessagePayload`
- added type `ShoppingListSetBusinessUnitAction`
</details>


<details>
<summary>Removed Type(s)</summary>

- :warning: removed type `AssociateRoleNameChangedMessage`
- :warning: removed type `AssociateRoleNameChangedMessagePayload`
- :warning: removed type `ProductSearchFacetScope`
</details>


<details>
<summary>Added Resource(s)</summary>

- added resource `/{projectKey}/business-units/key={key}/associates/{associateId}`
- added resource `/{projectKey}/business-units/{businessUnitId}/associates/{associateId}`
- added resource `/{projectKey}/in-store/key={storeKey}/business-units`
- added resource `/{projectKey}/in-store/key={storeKey}/business-units/key={key}`
- added resource `/{projectKey}/in-store/key={storeKey}/business-units/{ID}`
- added resource `/{projectKey}/in-store/key={storeKey}/business-units/key={key}/associates/{associateId}`
- added resource `/{projectKey}/in-store/key={storeKey}/business-units/{businessUnitId}/associates/{associateId}`
</details>


<details>
<summary>Added Method(s)</summary>

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
<summary>Required Property(s)</summary>

- :warning: changed property `triggerPattern` of type `ChangeTargetPatternChangeValue` to be required
</details>


<details>
<summary>Changed Property(s)</summary>

- :warning: changed property `extensions` of type `GraphQLError` from type `GraphQLErrorObject` to `object`
</details>


<details>
<summary>Removed Type(s)</summary>

- :warning: removed type `GraphQLErrorObject`
</details>

