<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ShoppingListSetDeleteDaysAfterLastModificationAction>
 */
final class ShoppingListSetDeleteDaysAfterLastModificationActionBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $deleteDaysAfterLastModification;

    /**

     * @return null|int
     */
    public function getDeleteDaysAfterLastModification()
    {
        return $this->deleteDaysAfterLastModification;
    }

    /**
     * @param ?int $deleteDaysAfterLastModification
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
            $this->deleteDaysAfterLastModification
        );
    }

    public static function of(): ShoppingListSetDeleteDaysAfterLastModificationActionBuilder
    {
        return new self();
    }
}
