<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\Builder;

/**
 * @implements Builder<DiscountCodeSetMaxApplicationsAction>
 */
final class DiscountCodeSetMaxApplicationsActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?int
     */
    private $maxApplications;

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
    public function getMaxApplications()
    {
        return $this->maxApplications;
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
    public function withMaxApplications(?int $maxApplications)
    {
        $this->maxApplications = $maxApplications;

        return $this;
    }

    public function build(): DiscountCodeSetMaxApplicationsAction
    {
        return new DiscountCodeSetMaxApplicationsActionModel(
            $this->action,
            $this->maxApplications
        );
    }

    public static function of(): DiscountCodeSetMaxApplicationsActionBuilder
    {
        return new self();
    }
}
