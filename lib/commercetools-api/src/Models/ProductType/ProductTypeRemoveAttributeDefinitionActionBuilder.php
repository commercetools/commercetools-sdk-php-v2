<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductTypeRemoveAttributeDefinitionAction>
 */
final class ProductTypeRemoveAttributeDefinitionActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $name;

    /**
     * <p>The name of the attribute to remove.</p>
     *
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }


    public function build(): ProductTypeRemoveAttributeDefinitionAction
    {
        return new ProductTypeRemoveAttributeDefinitionActionModel(
            $this->name
        );
    }

    public static function of(): ProductTypeRemoveAttributeDefinitionActionBuilder
    {
        return new self();
    }
}
