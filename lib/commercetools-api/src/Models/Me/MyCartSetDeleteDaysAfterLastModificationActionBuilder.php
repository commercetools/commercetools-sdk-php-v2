<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;

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
     * @return null|int
     */
    public function getDeleteDaysAfterLastModification()
    {
        return $this->deleteDaysAfterLastModification;
    }

    /**
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
