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

    public function build(): MyCartSetDeleteDaysAfterLastModificationAction
    {
        return new MyCartSetDeleteDaysAfterLastModificationActionModel(
            $this->action,
            $this->deleteDaysAfterLastModification
        );
    }

    public static function of(): MyCartSetDeleteDaysAfterLastModificationActionBuilder
    {
        return new self();
    }
}
