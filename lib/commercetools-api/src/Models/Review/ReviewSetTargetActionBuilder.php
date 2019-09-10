<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;

/**
 * @implements Builder<ReviewSetTargetAction>
 */
final class ReviewSetTargetActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?JsonObject
     */
    private $target;

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
     * @return null|JsonObject
     */
    public function getTarget()
    {
        return $this->target;
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
    public function withTarget(?JsonObject $target)
    {
        $this->target = $target;

        return $this;
    }

    public function build(): ReviewSetTargetAction
    {
        return new ReviewSetTargetActionModel(
            $this->action,
            $this->target
        );
    }

    public static function of(): ReviewSetTargetActionBuilder
    {
        return new self();
    }
}
