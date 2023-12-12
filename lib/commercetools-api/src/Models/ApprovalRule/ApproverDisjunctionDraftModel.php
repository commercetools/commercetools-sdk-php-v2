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
final class ApproverDisjunctionDraftModel extends JsonObjectModel implements ApproverDisjunctionDraft
{
    /**
     *
     * @var ?RuleApproverDraftCollection
     */
    protected $or;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?RuleApproverDraftCollection $or = null
    ) {
        $this->or = $or;
    }

    /**
     * <p>Any of the nested approvers must approve in order for the disjunction to be considered approved.</p>
     *
     *
     * @return null|RuleApproverDraftCollection
     */
    public function getOr()
    {
        if (is_null($this->or)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_OR);
            if (is_null($data)) {
                return null;
            }
            $this->or = RuleApproverDraftCollection::fromArray($data);
        }

        return $this->or;
    }


    /**
     * @param ?RuleApproverDraftCollection $or
     */
    public function setOr(?RuleApproverDraftCollection $or): void
    {
        $this->or = $or;
    }
}
