<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ShoppingListSetDeleteDaysAfterLastModificationAction>
 */
final class ShoppingListSetDeleteDaysAfterLastModificationActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?int
     */
    private $deleteDaysAfterLastModification;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return null|int
     */
    public function getDeleteDaysAfterLastModification()
    {
        return $this->deleteDaysAfterLastModification;
    }

    /**
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification)
    {
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;

        return $this;
    }

    public function build(): ShoppingListSetDeleteDaysAfterLastModificationAction
    {
        return new ShoppingListSetDeleteDaysAfterLastModificationActionModel(
            $this->action,
            $this->deleteDaysAfterLastModification
        );
    }

    public static function of(): ShoppingListSetDeleteDaysAfterLastModificationActionBuilder
    {
        return new self();
    }
}
