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
 * @implements Builder<SubscriptionSetEventsAction>
 */
final class SubscriptionSetEventsActionBuilder implements Builder
{
    /**

     * @var ?EventSubscriptionCollection
     */
    private $messages;

    /**
     * <p>Value to set. Can only be unset if either <code>messages</code> or <code>changes</code> is set.</p>
     *

     * @return null|EventSubscriptionCollection
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @param ?EventSubscriptionCollection $messages
     * @return $this
     */
    public function withMessages(?EventSubscriptionCollection $messages)
    {
        $this->messages = $messages;

        return $this;
    }


    public function build(): SubscriptionSetEventsAction
    {
        return new SubscriptionSetEventsActionModel(
            $this->messages
        );
    }

    public static function of(): SubscriptionSetEventsActionBuilder
    {
        return new self();
    }
}
