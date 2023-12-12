<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\ApprovalRule\ApproverHierarchy;
use Commercetools\Api\Models\ApprovalRule\ApproverHierarchyModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ApprovalRuleApproversSetMessagePayloadModel extends JsonObjectModel implements ApprovalRuleApproversSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ApprovalRuleApproversSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?ApproverHierarchy
     */
    protected $approvers;

    /**
     *
     * @var ?ApproverHierarchy
     */
    protected $oldApprovers;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ApproverHierarchy $approvers = null,
        ?ApproverHierarchy $oldApprovers = null,
        ?string $type = null
    ) {
        $this->approvers = $approvers;
        $this->oldApprovers = $oldApprovers;
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
     * <p>Approver hierarchy of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> after the <a href="ctp:api:type:ApprovalRuleSetApproversAction">Set Approvers</a> update action.</p>
     *
     *
     * @return null|ApproverHierarchy
     */
    public function getApprovers()
    {
        if (is_null($this->approvers)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_APPROVERS);
            if (is_null($data)) {
                return null;
            }

            $this->approvers = ApproverHierarchyModel::of($data);
        }

        return $this->approvers;
    }

    /**
     * <p>Approver hierarchy of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> before the <a href="ctp:api:type:ApprovalRuleSetApproversAction">Set Approvers</a> update action.</p>
     *
     *
     * @return null|ApproverHierarchy
     */
    public function getOldApprovers()
    {
        if (is_null($this->oldApprovers)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_OLD_APPROVERS);
            if (is_null($data)) {
                return null;
            }

            $this->oldApprovers = ApproverHierarchyModel::of($data);
        }

        return $this->oldApprovers;
    }


    /**
     * @param ?ApproverHierarchy $approvers
     */
    public function setApprovers(?ApproverHierarchy $approvers): void
    {
        $this->approvers = $approvers;
    }

    /**
     * @param ?ApproverHierarchy $oldApprovers
     */
    public function setOldApprovers(?ApproverHierarchy $oldApprovers): void
    {
        $this->oldApprovers = $oldApprovers;
    }
}
