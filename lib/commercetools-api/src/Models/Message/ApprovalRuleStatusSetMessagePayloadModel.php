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
final class ApprovalRuleStatusSetMessagePayloadModel extends JsonObjectModel implements ApprovalRuleStatusSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ApprovalRuleStatusSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $status;

    /**
     *
     * @var ?string
     */
    protected $oldStatus;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $status = null,
        ?string $oldStatus = null,
        ?string $type = null
    ) {
        $this->status = $status;
        $this->oldStatus = $oldStatus;
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
     * <p>Status of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> after the <a href="ctp:api:type:ApprovalRuleSetStatusAction">Set Status</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getStatus()
    {
        if (is_null($this->status)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_STATUS);
            if (is_null($data)) {
                return null;
            }
            $this->status = (string) $data;
        }

        return $this->status;
    }

    /**
     * <p>Status of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> before the <a href="ctp:api:type:ApprovalRuleSetStatusAction">Set Status</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getOldStatus()
    {
        if (is_null($this->oldStatus)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OLD_STATUS);
            if (is_null($data)) {
                return null;
            }
            $this->oldStatus = (string) $data;
        }

        return $this->oldStatus;
    }


    /**
     * @param ?string $status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * @param ?string $oldStatus
     */
    public function setOldStatus(?string $oldStatus): void
    {
        $this->oldStatus = $oldStatus;
    }
}
