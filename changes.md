**Api changes**

<details>
<summary>Changed Property(s)</summary>

- :warning: changed property `includedDiscounts` of type `DiscountedLineItemPriceDraft` from type `DiscountedLineItemPortion[]` to `DiscountedLineItemPortionDraft[]`
</details>


<details>
<summary>Required Property(s)</summary>

- :warning: changed property `isOnStock` of type `ProductVariantAvailability` to be required
- changed property `priceMode` of type `CustomLineItemDraft` to be optional
- changed property `oldShipmentState` of type `OrderShipmentStateChangedMessage` to be optional
- changed property `oldOrderState` of type `OrderStateChangedMessage` to be optional
- changed property `oldShipmentState` of type `OrderShipmentStateChangedMessagePayload` to be optional
- changed property `oldOrderState` of type `OrderStateChangedMessagePayload` to be optional
</details>


<details>
<summary>Added Property(s)</summary>

- added property `taxPortions` to type `TaxedItemPrice`
- added property `totalTax` to type `TaxedPriceDraft`
- added property `key` to type `DiscountCode`
- added property `key` to type `DiscountCodeDraft`
- added property `id` to type `ProductVariantAvailability`
- added property `version` to type `ProductVariantAvailability`
- added property `productsSearch` to type `SearchIndexingConfiguration`
- added property `mode` to type `ProjectChangeProductSearchIndexingEnabledAction`
</details>


<details>
<summary>Added Enum(s)</summary>

- added enum `product-tailoring` to type `ReferenceTypeId`
- added enum `ManuallySuspended` to type `SubscriptionHealthStatus`
</details>


<details>
<summary>Added Method(s)</summary>

- added method `$apiRoot->withProjectKey()->productTailoring()->get()`
- added method `$apiRoot->withProjectKey()->productTailoring()->post()`
- added method `$apiRoot->withProjectKey()->discountCodes()->withKey()->get()`
- added method `$apiRoot->withProjectKey()->discountCodes()->withKey()->head()`
- added method `$apiRoot->withProjectKey()->discountCodes()->withKey()->post()`
- added method `$apiRoot->withProjectKey()->discountCodes()->withKey()->delete()`
- added method `$apiRoot->withProjectKey()->products()->search()->post()`
- added method `$apiRoot->withProjectKey()->products()->search()->head()`
- added method `$apiRoot->withProjectKey()->productTailoring()->withKey()->get()`
- added method `$apiRoot->withProjectKey()->productTailoring()->withKey()->post()`
- added method `$apiRoot->withProjectKey()->productTailoring()->withKey()->delete()`
- added method `$apiRoot->withProjectKey()->productTailoring()->withId()->get()`
- added method `$apiRoot->withProjectKey()->productTailoring()->withId()->post()`
- added method `$apiRoot->withProjectKey()->productTailoring()->withId()->delete()`
- added method `$apiRoot->withProjectKey()->inStoreKeyWithStoreKeyValue()->productTailoring()->get()`
- added method `$apiRoot->withProjectKey()->inStoreKeyWithStoreKeyValue()->productTailoring()->post()`
- added method `$apiRoot->withProjectKey()->inStoreKeyWithStoreKeyValue()->products()->withProductId()->productTailoring()->get()`
- added method `$apiRoot->withProjectKey()->inStoreKeyWithStoreKeyValue()->products()->withProductId()->productTailoring()->post()`
- added method `$apiRoot->withProjectKey()->inStoreKeyWithStoreKeyValue()->products()->withProductId()->productTailoring()->delete()`
- added method `$apiRoot->withProjectKey()->inStoreKeyWithStoreKeyValue()->products()->withProductKey()->productTailoring()->get()`
- added method `$apiRoot->withProjectKey()->inStoreKeyWithStoreKeyValue()->products()->withProductKey()->productTailoring()->post()`
- added method `$apiRoot->withProjectKey()->inStoreKeyWithStoreKeyValue()->products()->withProductKey()->productTailoring()->delete()`
</details>


<details>
<summary>Added Resource(s)</summary>

- added resource `/{projectKey}/product-tailoring`
- added resource `/{projectKey}/discount-codes/key={key}`
- added resource `/{projectKey}/products/search`
- added resource `/{projectKey}/product-tailoring/key={key}`
- added resource `/{projectKey}/product-tailoring/{ID}`
- added resource `/{projectKey}/in-store/key={storeKey}/product-tailoring`
- added resource `/{projectKey}/in-store/key={storeKey}/products`
- added resource `/{projectKey}/in-store/key={storeKey}/products/{productID}`
- added resource `/{projectKey}/in-store/key={storeKey}/products/key={productKey}`
- added resource `/{projectKey}/in-store/key={storeKey}/products/{productID}/product-tailoring`
- added resource `/{projectKey}/in-store/key={storeKey}/products/key={productKey}/product-tailoring`
</details>


<details>
<summary>Added Type(s)</summary>

- added type `DiscountedLineItemPortionDraft`
- added type `DiscountCodeSetKeyAction`
- added type `LockedFieldError`
- added type `GraphQLLockedFieldError`
- added type `DiscountCodeCreatedMessage`
- added type `DiscountCodeDeletedMessage`
- added type `DiscountCodeKeySetMessage`
- added type `ProductTailoringCreatedMessage`
- added type `ProductTailoringDeletedMessage`
- added type `ProductTailoringDescriptionSetMessage`
- added type `ProductTailoringNameSetMessage`
- added type `ProductTailoringPublishedMessage`
- added type `ProductTailoringSlugSetMessage`
- added type `ProductTailoringUnpublishedMessage`
- added type `DiscountCodeCreatedMessagePayload`
- added type `DiscountCodeDeletedMessagePayload`
- added type `DiscountCodeKeySetMessagePayload`
- added type `ProductTailoringCreatedMessagePayload`
- added type `ProductTailoringDeletedMessagePayload`
- added type `ProductTailoringDescriptionSetMessagePayload`
- added type `ProductTailoringNameSetMessagePayload`
- added type `ProductTailoringPublishedMessagePayload`
- added type `ProductTailoringSlugSetMessagePayload`
- added type `ProductTailoringUnpublishedMessagePayload`
- added type `ProductPagedSearchResponse`
- added type `ProductSearchErrorResponse`
- added type `ProductSearchMatchingVariantEntry`
- added type `ProductSearchMatchingVariants`
- added type `ProductSearchProjectionParams`
- added type `ProductSearchRequest`
- added type `ProductSearchResult`
- added type `ProductSearchFacetCountExpression`
- added type `ProductSearchFacetCountLevelEnum`
- added type `ProductSearchFacetCountValue`
- added type `ProductSearchFacetDistinctBucketSortBy`
- added type `ProductSearchFacetDistinctBucketSortExpression`
- added type `ProductSearchFacetDistinctExpression`
- added type `ProductSearchFacetDistinctValue`
- added type `ProductSearchFacetExpression`
- added type `ProductSearchFacetRangesExpression`
- added type `ProductSearchFacetRangesFacetRange`
- added type `ProductSearchFacetRangesValue`
- added type `ProductSearchFacetResult`
- added type `ProductSearchFacetResultBucket`
- added type `ProductSearchFacetResultBucketEntry`
- added type `ProductSearchFacetResultCount`
- added type `ProductSearchFacetScope`
- added type `ProductSearchFacetScopeEnum`
- added type `ProductTailoring`
- added type `ProductTailoringData`
- added type `ProductTailoringDraft`
- added type `ProductTailoringInStoreDraft`
- added type `ProductTailoringPagedQueryResponse`
- added type `ProductTailoringReference`
- added type `ProductTailoringResourceIdentifier`
- added type `ProductTailoringUpdate`
- added type `ProductTailoringUpdateAction`
- added type `ProductTailoringPublishAction`
- added type `ProductTailoringSetDescriptionAction`
- added type `ProductTailoringSetMetaAttributesAction`
- added type `ProductTailoringSetMetaDescriptionAction`
- added type `ProductTailoringSetMetaKeywordsAction`
- added type `ProductTailoringSetMetaTitleAction`
- added type `ProductTailoringSetNameAction`
- added type `ProductTailoringSetSlugAction`
- added type `ProductTailoringUnpublishAction`
- added type `ProductSearchIndexingMode`
- added type `ProductSearchStatus`
- added type `SearchAndExpression`
- added type `SearchAnyValue`
- added type `SearchCompoundExpression`
- added type `SearchDateRangeExpression`
- added type `SearchDateRangeValue`
- added type `SearchDateTimeRangeExpression`
- added type `SearchDateTimeRangeValue`
- added type `SearchExactExpression`
- added type `SearchExistsExpression`
- added type `SearchExistsValue`
- added type `SearchFieldType`
- added type `SearchFilterExpression`
- added type `SearchFullTextExpression`
- added type `SearchFullTextPrefixExpression`
- added type `SearchFullTextPrefixValue`
- added type `SearchFullTextValue`
- added type `SearchLongRangeExpression`
- added type `SearchLongRangeValue`
- added type `SearchMatchType`
- added type `SearchMatchingVariant`
- added type `SearchNotExpression`
- added type `SearchNumberRangeExpression`
- added type `SearchNumberRangeValue`
- added type `SearchOrExpression`
- added type `SearchPrefixExpression`
- added type `SearchQuery`
- added type `SearchQueryExpression`
- added type `SearchQueryExpressionValue`
- added type `SearchSortMode`
- added type `SearchSortOrder`
- added type `SearchSorting`
- added type `SearchTimeRangeExpression`
- added type `SearchTimeRangeValue`
- added type `SearchWildCardExpression`
</details>

