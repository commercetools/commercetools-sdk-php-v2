**Api changes**

<details>
<summary>Added Type(s)</summary>

- added type `DiscountedLineItemPortionDraft`
- added type `DiscountCodeSetKeyAction`
- added type `DiscountCodeCreatedMessage`
- added type `DiscountCodeDeletedMessage`
- added type `DiscountCodeKeySetMessage`
- added type `DiscountCodeCreatedMessagePayload`
- added type `DiscountCodeDeletedMessagePayload`
- added type `DiscountCodeKeySetMessagePayload`
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
<summary>Changed Property(s)</summary>

- :warning: changed property `includedDiscounts` of type `DiscountedLineItemPriceDraft` from type `DiscountedLineItemPortion[]` to `DiscountedLineItemPortionDraft[]`
</details>


<details>
<summary>Added Property(s)</summary>

- added property `totalTax` to type `TaxedPriceDraft`
- added property `key` to type `DiscountCode`
- added property `key` to type `DiscountCodeDraft`
- added property `id` to type `ProductVariantAvailability`
- added property `version` to type `ProductVariantAvailability`
</details>


<details>
<summary>Added Method(s)</summary>

- added method `$apiRoot->withProjectKey()->discountCodes()->withKey()->get()`
- added method `$apiRoot->withProjectKey()->discountCodes()->withKey()->head()`
- added method `$apiRoot->withProjectKey()->discountCodes()->withKey()->post()`
- added method `$apiRoot->withProjectKey()->discountCodes()->withKey()->delete()`
</details>


<details>
<summary>Added Resource(s)</summary>

- added resource `/{projectKey}/discount-codes/key={key}`
</details>

