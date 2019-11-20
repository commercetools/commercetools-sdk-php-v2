<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;

/**
 * @implements Builder<MessagePayload>
 */
final class MessagePayloadBuilder implements Builder
{
    public function build(): MessagePayload
    {
        return new MessagePayloadModel(
        );
    }

    public static function of(): MessagePayloadBuilder
    {
        return new self();
    }
}
