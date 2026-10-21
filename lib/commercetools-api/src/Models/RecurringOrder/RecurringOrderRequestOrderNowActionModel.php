<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class RecurringOrderRequestOrderNowActionModel extends JsonObjectModel implements RecurringOrderRequestOrderNowAction
{
    public const DISCRIMINATOR_VALUE = 'requestOrderNow';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $reason;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $reason = null,
        ?string $action = null
    ) {
        $this->reason = $reason;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Note recorded on the resulting <a href="ctp:api:type:RecurringOrderNowRequestedMessage">RecurringOrderNowRequested</a> Message.</p>
     * <p>If <code>reason</code> is longer than 256 characters, an <a href="ctp:api:type:InvalidInputError">InvalidInput</a> error is returned.</p>
     *
     *
     * @return null|string
     */
    public function getReason()
    {
        if (is_null($this->reason)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_REASON);
            if (is_null($data)) {
                return null;
            }
            $this->reason = (string) $data;
        }

        return $this->reason;
    }


    /**
     * @param ?string $reason
     */
    public function setReason(?string $reason): void
    {
        $this->reason = $reason;
    }
}
