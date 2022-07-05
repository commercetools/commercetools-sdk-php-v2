<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class PayloadNotIncludedModel extends JsonObjectModel implements PayloadNotIncluded
{
    /**

     * @var ?string
     */
    protected $reason;

    /**

     * @var ?string
     */
    protected $payloadType;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $reason = null,
        ?string $payloadType = null
    ) {
        $this->reason = $reason;
        $this->payloadType = $payloadType;
    }

    /**

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

     * @return null|string
     */
    public function getPayloadType()
    {
        if (is_null($this->payloadType)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PAYLOAD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->payloadType = (string) $data;
        }

        return $this->payloadType;
    }


    /**
     * @param ?string $reason
     */
    public function setReason(?string $reason): void
    {
        $this->reason = $reason;
    }

    /**
     * @param ?string $payloadType
     */
    public function setPayloadType(?string $payloadType): void
    {
        $this->payloadType = $payloadType;
    }
}
