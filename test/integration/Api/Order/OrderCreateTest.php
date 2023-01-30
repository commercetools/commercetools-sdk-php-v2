<?php

namespace Commercetools\IntegrationTest\Api\Order;

use Commercetools\Api\Models\Cart\Cart;
use Commercetools\Api\Models\Cart\CartAddLineItemActionBuilder as CartAddLineItemActionBuilder;
use Commercetools\Api\Models\Cart\CartDraftBuilder;
use Commercetools\Api\Models\Cart\CartResourceIdentifierBuilder as CartResourceIdentifierBuilder;
use Commercetools\Api\Models\Cart\CartUpdateActionCollection;
use Commercetools\Api\Models\Cart\CartUpdateBuilder;
use Commercetools\Api\Models\Common\AddressBuilder as AddressBuilder;
use Commercetools\Api\Models\Common\AssetDimensionsBuilder;
use Commercetools\Api\Models\Common\AssetDraftBuilder;
use Commercetools\Api\Models\Common\AssetDraftCollection;
use Commercetools\Api\Models\Common\AssetSourceBuilder;
use Commercetools\Api\Models\Common\AssetSourceCollection;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Api\Models\Common\PriceDraftBuilder as PriceDraftBuilder;
use Commercetools\Api\Models\Common\PriceDraftCollection;
use Commercetools\Api\Models\Order\OrderFromCartDraftBuilder;
use Commercetools\Api\Models\Product\AttributeBuilder;
use Commercetools\Api\Models\Product\AttributeCollection;
use Commercetools\Api\Models\Product\ProductDraftBuilder;
use Commercetools\Api\Models\Product\ProductVariantDraftBuilder;
use Commercetools\Api\Models\ProductType\AttributeDefinitionDraftBuilder;
use Commercetools\Api\Models\ProductType\AttributeDefinitionDraftCollection;
use Commercetools\Api\Models\ProductType\AttributeTextTypeBuilder;
use Commercetools\Api\Models\ProductType\ProductTypeDraftBuilder;
use Commercetools\Api\Models\ProductType\ProductTypeResourceIdentifierBuilder;
use Commercetools\Api\Models\TaxCategory\TaxCategoryDraftBuilder;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifierBuilder;
use Commercetools\Api\Models\TaxCategory\TaxRateDraftBuilder;
use Commercetools\Api\Models\TaxCategory\TaxRateDraftCollection;
use Commercetools\IntegrationTest\ApiTestCase;
use Ramsey\Uuid\Uuid;

class OrderCreateTest extends ApiTestCase
{
    // TODO to be rewritten
    public function testOrder()
    {
        $uniqueString = 'test-' . Uuid::uuid4();

        $builder = $this->getApiBuilder();

        // building the product type
        $attributeDefinitionDraft = AttributeDefinitionDraftBuilder::of()
            ->withType(AttributeTextTypeBuilder::of()->build())
            ->withName('test-text')
            ->withLabel(LocalizedStringBuilder::of()->put('en', 'test-text')->build())
            ->withIsRequired(true)
            ->build();
        $productTypeDraft = ProductTypeDraftBuilder::of()
            ->withKey($uniqueString)
            ->withName($uniqueString)
            ->withDescription($uniqueString)
            ->withAttributes(new AttributeDefinitionDraftCollection([$attributeDefinitionDraft]))
            ->build();

        $request = $builder->with()->productTypes()->post($productTypeDraft);
        $productType = $request->execute();

        // building the tax category
        $assetSource = AssetSourceBuilder::of()
            ->withUri("http://www.google.com")
            ->withKey($uniqueString)
            ->withDimensions(
                AssetDimensionsBuilder::of()
                ->withW(100)->withH(100)
                ->build()
            )
            ->withContentType('application/json')
            ->build();
        $asset = AssetDraftBuilder::of()
            ->withKey($uniqueString)
            ->withSources(new AssetSourceCollection([$assetSource]))
            ->withName(LocalizedStringBuilder::of()->put('en', $uniqueString)->build())
            ->build();

        $taxRateDraft = TaxRateDraftBuilder::of()
            ->withName($uniqueString)
            ->withAmount(0.19)
            ->withIncludedInPrice(true)
            ->withCountry('DE')
            ->build();

        $taxCategoryDraft = TaxCategoryDraftBuilder::of()
            ->withName($uniqueString)
            ->withKey($uniqueString)
            ->withDescription($uniqueString)
            ->withRates(new TaxRateDraftCollection([$taxRateDraft]))
            ->build();
        $request = $builder->with()->taxCategories()->post($taxCategoryDraft);
        $taxCategory = $request->execute();

        // building the product
        $priceDraft = PriceDraftBuilder::of()
            ->withValue(
                MoneyBuilder::of()
                ->withCentAmount(100)
                ->withCurrencyCode('EUR')
                ->build()
            )
            ->build();

        $attribute = AttributeBuilder::of()
            ->withName('test-text')
            ->withValue('foo')
            ->build();

        $productVariantDraft = ProductVariantDraftBuilder::of()
            ->withSku($uniqueString)
            ->withKey($uniqueString)
            ->withPrices(new PriceDraftCollection([$priceDraft]))
            ->withAssets(new AssetDraftCollection([$asset]))
            ->withAttributes(new AttributeCollection([$attribute]))
            ->build();

        $productDraft = ProductDraftBuilder::of()
            ->withKey($uniqueString)
            ->withName(LocalizedStringBuilder::of()->put('en', $uniqueString)->build())
            ->withProductType(
                ProductTypeResourceIdentifierBuilder::of()
                    ->withId($productType->getId())
                    ->build()
            )
            ->withSlug(LocalizedStringBuilder::of()->put('en', $uniqueString)->build())
            ->withDescription(LocalizedStringBuilder::of()->put('en', $uniqueString)->build())
            ->withMasterVariant($productVariantDraft)
            ->withTaxCategory(
                TaxCategoryResourceIdentifierBuilder::of()
                    ->withId($taxCategory->getId())
                    ->build()
            )
            ->withPublish(true)
            ->build();

        $request = $builder->with()->products()->post($productDraft);
        $product = $request->execute();

        // building the cart
        $cartDraft = CartDraftBuilder::of()
            ->withCurrency('EUR')
            ->withShippingAddress(
                AddressBuilder::of()
                    ->withCountry('DE')
                    ->build()
            )
            ->build();
        $request = $builder->with()->carts()->post($cartDraft);
        $cart = $request->execute();

        $cartUpdateAction = CartUpdateBuilder::of()->withVersion($cart->getVersion())
            ->withActions(
                CartUpdateActionCollection::of()->add(CartAddLineItemActionBuilder::of()->withProductId($product->getId())->build())
            )->build();

        $request = $builder->with()->carts()
            ->withId($cart->getId())
            ->post($cartUpdateAction);
        $cartUpdated = $request->execute();

        // building the order
        $orderDraft = OrderFromCartDraftBuilder::of()
            ->withCart(CartResourceIdentifierBuilder::of()
                ->withId($cartUpdated->getId())
                ->build())
            ->withVersion($cartUpdated->getVersion())
            ->build();

        $orderResponse = $builder->with()->orders()->post($orderDraft)->execute();

        // filtering the order
        $request = $builder->with()->orders()->get()->withWhere("syncInfo is empty");
        $resultWithPredicateVar = $request->execute();
        $this->assertInstanceOf(Cart::class, $cart);
        $this->assertSame($cart->getId(), $orderResponse->getCart()->getId());
        $this->assertNotEmpty($resultWithPredicateVar);
    }
}
