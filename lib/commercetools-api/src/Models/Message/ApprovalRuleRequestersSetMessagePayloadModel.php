<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\ApprovalRule\RuleRequesterCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ApprovalRuleRequestersSetMessagePayloadModel extends JsonObjectModel implements ApprovalRuleRequestersSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ApprovalRuleRequestersSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?RuleRequesterCollection
     */
    protected $requesters;

    /**
     *
     * @var ?RuleRequesterCollection
     */
    protected $oldRequesters;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?RuleRequesterCollection $requesters = null,
        ?RuleRequesterCollection $oldRequesters = null,
        ?string $type = null
    ) {
        $this->requesters = $requesters;
        $this->oldRequesters = $oldRequesters;
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
     * <p>RuleRequester of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> after the <a href="ctp:api:type:ApprovalRuleSetRequestersAction">Set Requester</a> update action.</p>
     *
     *
     * @return null|RuleRequesterCollection
     */
    public function getRequesters()
    {
        if (is_null($this->requesters)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_REQUESTERS);
            if (is_null($data)) {
                return null;
            }
            $this->requesters = RuleRequesterCollection::fromArray($data);
        }

        return $this->requesters;
    }

    /**
     * <p>RuleRequester of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> after the <a href="ctp:api:type:ApprovalRuleSetRequestersAction">Set Requester</a> update action.</p>
     *
     *
     * @return null|RuleRequesterCollection
     */
    public function getOldRequesters()
    {
        if (is_null($this->oldRequesters)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_OLD_REQUESTERS);
            if (is_null($data)) {
                return null;
            }
            $this->oldRequesters = RuleRequesterCollection::fromArray($data);
        }

        return $this->oldRequesters;
    }


    /**
     * @param ?RuleRequesterCollection $requesters
     */
    public function setRequesters(?RuleRequesterCollection $requesters): void
    {
        $this->requesters = $requesters;
    }

    /**
     * @param ?RuleRequesterCollection $oldRequesters
     */
    public function setOldRequesters(?RuleRequesterCollection $oldRequesters): void
    {
        $this->oldRequesters = $oldRequesters;
    }
}
