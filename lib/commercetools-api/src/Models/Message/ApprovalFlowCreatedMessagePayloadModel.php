<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\ApprovalFlow\ApprovalFlow;
use Commercetools\Api\Models\ApprovalFlow\ApprovalFlowModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ApprovalFlowCreatedMessagePayloadModel extends JsonObjectModel implements ApprovalFlowCreatedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ApprovalFlowCreated';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?ApprovalFlow
     */
    protected $approvalFlow;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ApprovalFlow $approvalFlow = null,
        ?string $type = null
    ) {
        $this->approvalFlow = $approvalFlow;
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
     * <p>The <a href="ctp:api:type:ApprovalFlow">Approval Flow</a> that was created.</p>
     *
     *
     * @return null|ApprovalFlow
     */
    public function getApprovalFlow()
    {
        if (is_null($this->approvalFlow)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_APPROVAL_FLOW);
            if (is_null($data)) {
                return null;
            }

            $this->approvalFlow = ApprovalFlowModel::of($data);
        }

        return $this->approvalFlow;
    }


    /**
     * @param ?ApprovalFlow $approvalFlow
     */
    public function setApprovalFlow(?ApprovalFlow $approvalFlow): void
    {
        $this->approvalFlow = $approvalFlow;
    }
}
