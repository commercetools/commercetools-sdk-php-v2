<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class RecurringOrderStateChangedMessagePayloadModel extends JsonObjectModel implements RecurringOrderStateChangedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'RecurringOrderStateChanged';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $state;

    /**
     *
     * @var ?string
     */
    protected $oldState;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $state = null,
        ?string $oldState = null,
        ?string $type = null
    ) {
        $this->state = $state;
        $this->oldState = $oldState;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p><a href="ctp:api:type:RecurringOrderState">RecurringOrderState</a> after the <a href="ctp:api:type:RecurringOrderSetStateAction">Set RecurringOrderState</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->state = (string) $data;
        }

        return $this->state;
    }

    /**
     * <p><a href="ctp:api:type:RecurringOrderState">RecurringOrderState</a> before the <a href="ctp:api:type:RecurringOrderSetStateAction">Set RecurringOrderState</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getOldState()
    {
        if (is_null($this->oldState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OLD_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->oldState = (string) $data;
        }

        return $this->oldState;
    }


    /**
     * @param ?string $state
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    /**
     * @param ?string $oldState
     */
    public function setOldState(?string $oldState): void
    {
        $this->oldState = $oldState;
    }
}
