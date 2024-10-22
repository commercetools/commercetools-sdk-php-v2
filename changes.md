**Api changes**

<details>
<summary>Added Type(s)</summary>

- added type `SearchNotReadyError`
- added type `GraphQLSearchNotReadyError`
- added type `ProductTailoringAttribute`
- added type `ProductTailoringSetAttributeAction`
- added type `ProductTailoringSetAttributeInAllVariantsAction`
- added type `ImageProcessingOngoingWarning`
- added type `WarningObject`
</details>


<details>
<summary>Removed Type(s)</summary>

- :warning: removed type `ProductSearchStatus`
</details>


<details>
<summary>Added Property(s)</summary>

- added property `staged` to type `ProductVariantDeletedMessage`
- added property `staged` to type `ProductVariantDeletedMessagePayload`
- added property `warnings` to type `ProductTailoring`
- added property `attributes` to type `ProductVariantTailoring`
- added property `attributes` to type `ProductVariantTailoringDraft`
- added property `attributes` to type `ProductTailoringAddVariantAction`
- added property `warnings` to type `Product`
- added property `customers` to type `SearchIndexingConfiguration`
- added property `source` to type `EventBridgeDestination`
</details>


<details>
<summary>Added Enum(s)</summary>

- added enum `customer-group` to type `ExtensionResourceTypeId`
- added enum `product-tailoring` to type `MessageSubscriptionResourceTypeId`
- added enum `product-tailoring` to type `ResourceTypeId`
</details>


<details>
<summary>Added Method(s)</summary>

- added method `$apiRoot->withProjectKey()->productTailoring()->head()`
</details>

**Import changes**

<details>
<summary>Added Type(s)</summary>

- added type `InvalidFieldsUpdateError`
- added type `NewMasterVariantAdditionNotAllowedError`
</details>

