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
 * @implements Builder<ShoppingListsConfiguration>
 */
final class ShoppingListsConfigurationBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $deleteDaysAfterLastModification;

    /**
     * <p>The default value for the deleteDaysAfterLastModification parameter of the ShoppingListDraft. Initially set to 360 for projects created after December 2019.</p>
     *
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


    public function build(): ShoppingListsConfiguration
    {
        return new ShoppingListsConfigurationModel(
            $this->deleteDaysAfterLastModification
        );
    }

    public static function of(): ShoppingListsConfigurationBuilder
    {
        return new self();
    }
}
