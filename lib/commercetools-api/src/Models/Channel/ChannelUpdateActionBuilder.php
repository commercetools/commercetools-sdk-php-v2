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
    public function build(): ChannelUpdateAction
    {
        return new ChannelUpdateActionModel(
        );
    }

    public static function of(): ChannelUpdateActionBuilder
    {
        return new self();
    }
}
