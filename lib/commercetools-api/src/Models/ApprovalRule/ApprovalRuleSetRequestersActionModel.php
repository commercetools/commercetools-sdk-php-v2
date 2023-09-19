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
final class ApprovalRuleSetRequestersActionModel extends JsonObjectModel implements ApprovalRuleSetRequestersAction
{
    public const DISCRIMINATOR_VALUE = 'setRequesters';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?RuleRequesterDraftCollection
     */
    protected $requesters;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?RuleRequesterDraftCollection $requesters = null,
        ?string $action = null
    ) {
        $this->requesters = $requesters;
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
     * <p>New requesters to set for the Approval Rule.</p>
     *
     *
     * @return null|RuleRequesterDraftCollection
     */
    public function getRequesters()
    {
        if (is_null($this->requesters)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_REQUESTERS);
            if (is_null($data)) {
                return null;
            }
            $this->requesters = RuleRequesterDraftCollection::fromArray($data);
        }

        return $this->requesters;
    }


    /**
     * @param ?RuleRequesterDraftCollection $requesters
     */
    public function setRequesters(?RuleRequesterDraftCollection $requesters): void
    {
        $this->requesters = $requesters;
    }
}
