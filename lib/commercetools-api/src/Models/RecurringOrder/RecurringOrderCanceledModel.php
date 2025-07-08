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
final class RecurringOrderCanceledModel extends JsonObjectModel implements RecurringOrderCanceled
{
    public const DISCRIMINATOR_VALUE = 'canceled';
    /**
     *
     * @var ?string
     */
    protected $type;

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
        ?string $type = null
    ) {
        $this->reason = $reason;
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
     * <p>The reason for the cancelation.</p>
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
