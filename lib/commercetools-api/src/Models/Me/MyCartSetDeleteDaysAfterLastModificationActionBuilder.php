<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyCartSetDeleteDaysAfterLastModificationAction>
 */
final class MyCartSetDeleteDaysAfterLastModificationActionBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $deleteDaysAfterLastModification;

    /**
     * <p>Value to set.
     * If not provided, the default value for this field configured in <a href="ctp:api:type:CartsConfiguration">Project settings</a> is assigned.</p>
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


    public function build(): MyCartSetDeleteDaysAfterLastModificationAction
    {
        return new MyCartSetDeleteDaysAfterLastModificationActionModel(
            $this->deleteDaysAfterLastModification
        );
    }

    public static function of(): MyCartSetDeleteDaysAfterLastModificationActionBuilder
    {
        return new self();
    }
}
