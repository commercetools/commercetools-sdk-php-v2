<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ChannelUpdateAction>
 */
final class ChannelUpdateActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

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
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    public function build(): ChannelUpdateAction
    {
        return new ChannelUpdateActionModel(
            $this->action
        );
    }

    public static function of(): ChannelUpdateActionBuilder
    {
        return new self();
    }
}
