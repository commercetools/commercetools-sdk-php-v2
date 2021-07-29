<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProjectChangeShoppingListsConfiguration>
 */
final class ProjectChangeShoppingListsConfigurationBuilder implements Builder
{
    /**
     * @var null|ShoppingListsConfiguration|ShoppingListsConfigurationBuilder
     */
    private $shoppingListsConfiguration;

    /**
     * @return null|ShoppingListsConfiguration
     */
    public function getShoppingListsConfiguration()
    {
        return $this->shoppingListsConfiguration instanceof ShoppingListsConfigurationBuilder ? $this->shoppingListsConfiguration->build() : $this->shoppingListsConfiguration;
    }

    /**
     * @param ?ShoppingListsConfiguration $shoppingListsConfiguration
     * @return $this
     */
    public function withShoppingListsConfiguration(?ShoppingListsConfiguration $shoppingListsConfiguration)
    {
        $this->shoppingListsConfiguration = $shoppingListsConfiguration;

        return $this;
    }

    /**
     * @deprecated use withShoppingListsConfiguration() instead
     * @return $this
     */
    public function withShoppingListsConfigurationBuilder(?ShoppingListsConfigurationBuilder $shoppingListsConfiguration)
    {
        $this->shoppingListsConfiguration = $shoppingListsConfiguration;

        return $this;
    }

    public function build(): ProjectChangeShoppingListsConfiguration
    {
        return new ProjectChangeShoppingListsConfigurationModel(
            $this->shoppingListsConfiguration instanceof ShoppingListsConfigurationBuilder ? $this->shoppingListsConfiguration->build() : $this->shoppingListsConfiguration
        );
    }

    public static function of(): ProjectChangeShoppingListsConfigurationBuilder
    {
        return new self();
    }
}
