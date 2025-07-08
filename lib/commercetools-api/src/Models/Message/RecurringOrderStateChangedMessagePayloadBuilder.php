<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<RecurringOrderStateChangedMessagePayload>
 */
final class RecurringOrderStateChangedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $state;

    /**

     * @var ?string
     */
    private $oldState;

    /**
     * <p><a href="ctp:api:type:RecurringOrderState">RecurringOrderState</a> after the <a href="ctp:api:type:RecurringOrderSetStateAction">Set RecurringOrderState</a> update action.</p>
     *

     * @return null|string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * <p><a href="ctp:api:type:RecurringOrderState">RecurringOrderState</a> before the <a href="ctp:api:type:RecurringOrderSetStateAction">Set RecurringOrderState</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldState()
    {
        return $this->oldState;
    }

    /**
     * @param ?string $state
     * @return $this
     */
    public function withState(?string $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @param ?string $oldState
     * @return $this
     */
    public function withOldState(?string $oldState)
    {
        $this->oldState = $oldState;

        return $this;
    }


    public function build(): RecurringOrderStateChangedMessagePayload
    {
        return new RecurringOrderStateChangedMessagePayloadModel(
            $this->state,
            $this->oldState
        );
    }

    public static function of(): RecurringOrderStateChangedMessagePayloadBuilder
    {
        return new self();
    }
}
