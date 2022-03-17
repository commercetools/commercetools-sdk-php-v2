<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProjectChangeShoppingListsConfigurationActionModel extends JsonObjectModel implements ProjectChangeShoppingListsConfigurationAction
{
    public const DISCRIMINATOR_VALUE = 'changeShoppingListsConfiguration';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?ShoppingListsConfiguration
     */
    protected $shoppingListsConfiguration;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ShoppingListsConfiguration $shoppingListsConfiguration = null
    ) {
        $this->shoppingListsConfiguration = $shoppingListsConfiguration;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Configuration for the <a href="/../api/projects/shoppingLists">Shopping Lists</a> feature.</p>
     *
     * @return null|ShoppingListsConfiguration
     */
    public function getShoppingListsConfiguration()
    {
        if (is_null($this->shoppingListsConfiguration)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHOPPING_LISTS_CONFIGURATION);
            if (is_null($data)) {
                return null;
            }

            $this->shoppingListsConfiguration = ShoppingListsConfigurationModel::of($data);
        }

        return $this->shoppingListsConfiguration;
    }


    /**
     * @param ?ShoppingListsConfiguration $shoppingListsConfiguration
     */
    public function setShoppingListsConfiguration(?ShoppingListsConfiguration $shoppingListsConfiguration): void
    {
        $this->shoppingListsConfiguration = $shoppingListsConfiguration;
    }
}
