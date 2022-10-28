<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<SubscriptionSetMessagesAction>
 */
final class SubscriptionSetMessagesActionBuilder implements Builder
{
    /**

     * @var ?MessageSubscriptionCollection
     */
    private $messages;

    /**
     * <p>Value to set. Can only be unset if <code>changes</code> is set.</p>
     *

     * @return null|MessageSubscriptionCollection
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @param ?MessageSubscriptionCollection $messages
     * @return $this
     */
    public function withMessages(?MessageSubscriptionCollection $messages)
    {
        $this->messages = $messages;

        return $this;
    }


    public function build(): SubscriptionSetMessagesAction
    {
        return new SubscriptionSetMessagesActionModel(
            $this->messages
        );
    }

    public static function of(): SubscriptionSetMessagesActionBuilder
    {
        return new self();
    }
}
