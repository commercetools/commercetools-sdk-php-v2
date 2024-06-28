<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class BusinessUnitChangeApprovalRuleModeActionModel extends JsonObjectModel implements BusinessUnitChangeApprovalRuleModeAction
{
    public const DISCRIMINATOR_VALUE = 'changeApprovalRuleMode';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $approvalRuleMode;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $approvalRuleMode = null,
        ?string $action = null
    ) {
        $this->approvalRuleMode = $approvalRuleMode;
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
     * <p>The new value for <code>approvalRuleMode</code>.</p>
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
     * @param ?string $approvalRuleMode
     */
    public function setApprovalRuleMode(?string $approvalRuleMode): void
    {
        $this->approvalRuleMode = $approvalRuleMode;
    }
}
