<?php

namespace Commercetools\UnitTest;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ByProjectKeyGet;
use Commercetools\Api\Models\Cart\Cart;
use Commercetools\Api\Models\Cart\CartModel;
use Commercetools\Api\Models\Category\CategoryDraftBuilder;
use Commercetools\Api\Models\Category\CategoryModel;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\Error\ErrorResponse;
use Commercetools\Api\Models\Product\AttributeAccessor;
use Commercetools\Api\Models\Product\AttributeCollection;
use Commercetools\Api\Models\Product\AttributeModel;
use Commercetools\Api\Models\Product\CustomFieldAccessor;
use Commercetools\Api\Models\Product\NestedAttribute;
use Commercetools\Api\Models\Product\NestedAttributeCollection;
use Commercetools\Api\Models\Product\ProductDraftModel;
use Commercetools\Api\Models\Product\ProductVariantDraftCollection;
use Commercetools\Api\Models\Product\ProductVariantDraftModel;
use Commercetools\Api\Models\Product\ProductVariantModel;
use Commercetools\Api\Models\ProductType\AttributeLocalizedEnumValue;
use Commercetools\Api\Models\ProductType\AttributePlainEnumValue;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use Commercetools\Api\Models\Type\FieldContainerBuilder;
use Commercetools\Base\JsonObject;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class MiscTest extends TestCase
{
    public function testMappings()
    {
        $t = new ByProjectKeyGet('');

        $tr = new Response(
            500,
            [],
            '{"foo" : {"bar": "baz"}, "foos": [{"bars": "bazs"}], "bar": [1, 2, 3], "baz": "boz" }'
        );
        $foo = $t->mapFromResponse($tr);

        $tr = new Response(
            200,
            [],
            '{"foo" : {"bar": "baz"}, "foos": [{"bars": "bazs"}], "bar": [1, 2, 3], "baz": "boz" }'
        );
        /** @var CartModel $bar */
        $bar = $t->mapFromResponse($tr, CartModel::class);

        $this->assertInstanceOf(ErrorResponse::class, $foo);
        $this->assertInstanceOf(Cart::class, $bar);

        $this->assertSame('baz', $foo->get('foo')->get('bar'));
        $this->assertInstanceOf(JsonObject::class, $foo->get('foos')->current());
        $this->assertSame([1, 2, 3], $foo->get('bar'));
        $this->assertSame('boz', $foo->get('baz'));

        $tr = new Response(200, [], '{"de-DE" : "test" }');
        $l = $t->mapFromResponse($tr, LocalizedStringModel::class);
        $this->assertSame('test', $l->at('de-DE'));

        $t = ProductDraftModel::of();

        $v = ProductVariantDraftModel::of();
        $v->setSku('123');

        $t->setDescription(LocalizedStringModel::of()->put('en', 'test'));
        $t->setVariants((new ProductVariantDraftCollection())->add($v));
        $this->assertJsonStringEqualsJsonString(
            '{"description":{"en":"test"},"variants":[{"sku":"123"}]}',
            json_encode($t)
        );

        $l = LocalizedStringBuilder::of()->put('en', 'testEN')->put('de-DE', 'testDE');
        $this->assertJsonStringEqualsJsonString('{"en": "testEN", "de-DE": "testDE"}', json_encode($l->build()));

        $d = ProductVariantDraftModel::fromArray(['sku' => 'test']);
        $this->assertSame('test', $d->getSku());

        $fc = FieldContainerBuilder::of();
        $fc->put('foo', 'bar');
        $cf = CustomFieldsDraftBuilder::of();
        $cf->withFieldsBuilder($fc);

        $b = CategoryDraftBuilder::of()->withCustomBuilder($cf);

        $c1 = $b->build();

        $fc->put('foo', 'baz');
        $c2 = $b->build();

        $this->assertNotSame($c1, $c2);
        $this->assertNotSame($c1->getCustom(), $c2->getCustom());
        $this->assertJsonStringEqualsJsonString('{"custom":{"fields":{"foo":"bar"}}}', json_encode($c1));
        $this->assertJsonStringEqualsJsonString('{"custom":{"fields":{"foo":"baz"}}}', json_encode($c2));

        $a = AttributeModel::of();
        $a->setValue('foo');

        $t = ProductVariantModel::of();
        $a->with(AttributeAccessor::of())->getValue();
        $t->with();
    }

    public function testParams()
    {
        $root = new ApiRequestBuilder();

        $t = $root->withProjectKey('test')->categories()->get()->withPredicateVar("test", "test");
        $this->assertSame("test/categories?var.test=test", $t->getUri()->__toString());

        $t = $root->withProjectKey('test')->categories()->get()->withPredicateVar("test", ["test"]);
        $this->assertSame("test/categories?var.test=test", $t->getUri()->__toString());
    }

    public function testAttributes()
    {
        $variant = ProductVariantModel::of([
            'attributes' => [
                AttributeModel::fromArray([
                    'name' => 'enum',
                    'value' => [
                        'key' => 'foo',
                        'label' => 'foo'
                    ]
                ]),
                AttributeModel::fromArray([
                    'name' => 'lenum',
                    'value' => [
                        'key' => 'foo',
                        'label' => [
                            'en' => 'foo'
                        ]
                    ]
                ]),
                AttributeModel::fromArray([
                    'name' => 'text',
                    'value' => 'foo'
                ]),
                AttributeModel::fromArray([
                    'name' => 'nested',
                    'value' => [
                        [
                            'name' => 'nested-text',
                            'value' => 'foo'
                        ]
                    ]
                ]),
                AttributeModel::fromArray([
                    'name' => 'nested-set',
                    'value' => [
                        [
                            [
                                'name' => 'nested-text',
                                'value' => 'foo'
                            ]
                        ]
                    ]
                ])
            ]
        ]);
        /**
         * @var AttributePlainEnumValue $enum
         */
        $enum = $variant->getAttributes()->at(0)->with(AttributeAccessor::of())->getValueAsEnum();
        /**
         * @var AttributeLocalizedEnumValue $lenum
         */
        $lenum = $variant->getAttributes()->at(1)->with(AttributeAccessor::of())->getValueAsLocalizedEnum();
        $text = $variant->getAttributes()->at(2)->with(AttributeAccessor::of())->getValueAsString();
        /**
         * @var NestedAttribute $nested
         */
        $nested = $variant->getAttributes()->at(3)->with(AttributeAccessor::of())->getValueAsNested();
        /**
         * @var NestedAttributeCollection $nestedSet
         */
        $nestedSet = $variant->getAttributes()->at(4)->with(AttributeAccessor::of())->getValueAsNestedSet();


        $this->assertSame("foo", $enum->getLabel());
        $this->assertSame("foo", $lenum->getLabel()['en']);
        $this->assertSame("foo", $text);
        $this->assertSame("foo", $nested->current()->getValue());
        $this->assertSame("foo", $nestedSet->current()->current()->getValue());

//        $this->assertSame("foo", $variant->getAttributes()->at(0)->with(AttributeAccessor::of())->getTypedValue()->getLabel());
//        $this->assertSame("foo", $variant->getAttributes()->at(1)->with(AttributeAccessor::of())->getTypedValue()->getLabel()['en']);
//        $this->assertSame("foo", $variant->getAttributes()->at(2)->with(AttributeAccessor::of())->getTypedValue());
//        $this->assertSame("foo", $variant->getAttributes()->at(3)->with(AttributeAccessor::of())->getTypedValue()->current()->getValue());
//        $this->assertSame("foo", $variant->getAttributes()->at(4)->with(AttributeAccessor::of())->getTypedValue()->current()->current()->getValue());
    }

    public function testCustomFields()
    {
        $c = CategoryModel::fromArray([
            'custom' => [
                'fields' => [
                    'string' => 'foo',
                    'enum' => [
                        'key' => 'foo',
                        'label' => 'foo'
                    ],
                    'lenum' => [
                        'key' => 'foo',
                        'label' => [
                            'en' => 'foo'
                        ]
                    ],
                ]
            ]
        ]);
        $this->assertSame('foo', $c->getCustom()->getFields()->with('string', CustomFieldAccessor::of())->getValueAsString());
        $this->assertSame('foo', $c->getCustom()->getFields()->with('enum', CustomFieldAccessor::of())->getValueAsEnum()->getKey());
        $this->assertSame('foo', $c->getCustom()->getFields()->with('enum', CustomFieldAccessor::of())->getValueAsEnum()->getLabel());
        $this->assertSame('foo', $c->getCustom()->getFields()->with('lenum', CustomFieldAccessor::of())->getValueAsLocalizedEnum()->getKey());
        $this->assertSame('foo', $c->getCustom()->getFields()->with('lenum', CustomFieldAccessor::of())->getValueAsLocalizedEnum()->getLabel()->at('en'));
    }
}
