<?php

namespace Commercetools\IntegrationTest\Import;

use Commercetools\Import\Models\Common\ProductTypeKeyReferenceBuilder;
use Commercetools\Import\Models\Importrequests\ProductTypeImportRequestBuilder;
use Commercetools\Import\Models\Producttypes\AttributeDefinitionBuilder;
use Commercetools\Import\Models\Producttypes\AttributeDefinitionCollection;
use Commercetools\Import\Models\Producttypes\AttributeNestedTypeBuilder;
use Commercetools\Import\Models\Producttypes\ProductTypeImportBuilder;
use Commercetools\Import\Models\Producttypes\ProductTypeImportCollection;
use Commercetools\IntegrationTest\ImportTestCase;

class MiscTest extends ImportTestCase
{
    public function testNestedTypeImport()
    {
        $builder = $this->getImportApiBuilder();
        $builder->with()->productTypes()->importContainers()->withImportContainerKeyValue("")
            ->post(ProductTypeImportRequestBuilder::of()
                ->withResources(ProductTypeImportCollection::of()
                    ->add(ProductTypeImportBuilder::of()
                        ->withKey("my-type")
                        ->withAttributes(AttributeDefinitionCollection::of()
                            ->add(AttributeDefinitionBuilder::of()
                                ->withName("nested-attribute")
                                ->withType(AttributeNestedTypeBuilder::of()
                                    ->withTypeReference(ProductTypeKeyReferenceBuilder::of()
                                        ->withKey("nested-product-type")
                                        ->build())
                                    ->build())
                                ->build())
                        )
                        ->build()))
                ->build());
    }
}
