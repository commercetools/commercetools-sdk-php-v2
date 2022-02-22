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
 * @implements Builder<ProjectChangeShoppingListsConfigurationAction>
 */
final class ProjectChangeShoppingListsConfigurationActionBuilder implements Builder
{
    /**
     * @var null|ShoppingListsConfiguration|ShoppingListsConfigurationBuilder
     */
    private $shoppingListsConfiguration;

    /**
     * <p>Configuration for the <a href="/../api/projects/shoppingLists">Shopping Lists</a> feature.</p>
     *
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

    public function build(): ProjectChangeShoppingListsConfigurationAction
    {
        return new ProjectChangeShoppingListsConfigurationActionModel(
            $this->shoppingListsConfiguration instanceof ShoppingListsConfigurationBuilder ? $this->shoppingListsConfiguration->build() : $this->shoppingListsConfiguration
        );
    }

    public static function of(): ProjectChangeShoppingListsConfigurationActionBuilder
    {
        return new self();
    }
}
