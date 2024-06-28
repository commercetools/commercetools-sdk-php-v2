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
final class BusinessUnitApprovalRuleModeChangedMessagePayloadModel extends JsonObjectModel implements BusinessUnitApprovalRuleModeChangedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'BusinessUnitApprovalRuleModeChanged';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $approvalRuleMode;

    /**
     *
     * @var ?string
     */
    protected $oldApprovalRuleMode;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $approvalRuleMode = null,
        ?string $oldApprovalRuleMode = null,
        ?string $type = null
    ) {
        $this->approvalRuleMode = $approvalRuleMode;
        $this->oldApprovalRuleMode = $oldApprovalRuleMode;
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
     * <p><a href="ctp:api:type:BusinessUnitApprovalRuleMode">BusinessUnitApprovalRuleMode</a> of the Business Unit after the <a href="ctp:api:type:BusinessUnitChangeApprovalRuleModeAction">Change Approval Rule Mode</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getApprovalRuleMode()
    {
        if (is_null($this->approvalRuleMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_APPROVAL_RULE_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->approvalRuleMode = (string) $data;
        }

        return $this->approvalRuleMode;
    }

    /**
     * <p><a href="ctp:api:type:BusinessUnitApprovalRuleMode">BusinessUnitApprovalRuleMode</a> of the Business Unit before the <a href="ctp:api:type:BusinessUnitChangeApprovalRuleModeAction">Change Approval Rule Mode</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getOldApprovalRuleMode()
    {
        if (is_null($this->oldApprovalRuleMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OLD_APPROVAL_RULE_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->oldApprovalRuleMode = (string) $data;
        }

        return $this->oldApprovalRuleMode;
    }


    /**
     * @param ?string $approvalRuleMode
     */
    public function setApprovalRuleMode(?string $approvalRuleMode): void
    {
        $this->approvalRuleMode = $approvalRuleMode;
    }

    /**
     * @param ?string $oldApprovalRuleMode
     */
    public function setOldApprovalRuleMode(?string $oldApprovalRuleMode): void
    {
        $this->oldApprovalRuleMode = $oldApprovalRuleMode;
    }
}
