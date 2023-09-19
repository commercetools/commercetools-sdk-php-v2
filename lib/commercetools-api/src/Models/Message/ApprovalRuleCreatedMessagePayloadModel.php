<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\ApprovalRule\ApprovalRule;
use Commercetools\Api\Models\ApprovalRule\ApprovalRuleModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ApprovalRuleCreatedMessagePayloadModel extends JsonObjectModel implements ApprovalRuleCreatedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ApprovalRuleCreated';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?ApprovalRule
     */
    protected $approvalRule;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ApprovalRule $approvalRule = null,
        ?string $type = null
    ) {
        $this->approvalRule = $approvalRule;
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
     * <p>The <a href="ctp:api:type:ApprovalRule">Approval Rule</a> that was created.</p>
     *
     *
     * @return null|ApprovalRule
     */
    public function getApprovalRule()
    {
        if (is_null($this->approvalRule)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_APPROVAL_RULE);
            if (is_null($data)) {
                return null;
            }

            $this->approvalRule = ApprovalRuleModel::of($data);
        }

        return $this->approvalRule;
    }


    /**
     * @param ?ApprovalRule $approvalRule
     */
    public function setApprovalRule(?ApprovalRule $approvalRule): void
    {
        $this->approvalRule = $approvalRule;
    }
}
