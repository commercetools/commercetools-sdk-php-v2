<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalRule;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ApprovalRuleSetApproversActionModel extends JsonObjectModel implements ApprovalRuleSetApproversAction
{
    public const DISCRIMINATOR_VALUE = 'setApprovers';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?ApproverHierarchyDraft
     */
    protected $approvers;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ApproverHierarchyDraft $approvers = null,
        ?string $action = null
    ) {
        $this->approvers = $approvers;
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
     * <p>New approvers to set for the Approval Rule.</p>
     *
     *
     * @return null|ApproverHierarchyDraft
     */
    public function getApprovers()
    {
        if (is_null($this->approvers)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_APPROVERS);
            if (is_null($data)) {
                return null;
            }

            $this->approvers = ApproverHierarchyDraftModel::of($data);
        }

        return $this->approvers;
    }


    /**
     * @param ?ApproverHierarchyDraft $approvers
     */
    public function setApprovers(?ApproverHierarchyDraft $approvers): void
    {
        $this->approvers = $approvers;
    }
}
