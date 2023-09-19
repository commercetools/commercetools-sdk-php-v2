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
final class ApproverConjunctionDraftModel extends JsonObjectModel implements ApproverConjunctionDraft
{
    /**
     *
     * @var ?ApproverDisjunctionDraftCollection
     */
    protected $and;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ApproverDisjunctionDraftCollection $and = null
    ) {
        $this->and = $and;
    }

    /**
     * <p>All of the nested disjunctions must be approved in order for the conjunction to be considered approved.
     * The total count of approvers across the nested disjunctions must not exceed 10.</p>
     *
     *
     * @return null|ApproverDisjunctionDraftCollection
     */
    public function getAnd()
    {
        if (is_null($this->and)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_AND);
            if (is_null($data)) {
                return null;
            }
            $this->and = ApproverDisjunctionDraftCollection::fromArray($data);
        }

        return $this->and;
    }


    /**
     * @param ?ApproverDisjunctionDraftCollection $and
     */
    public function setAnd(?ApproverDisjunctionDraftCollection $and): void
    {
        $this->and = $and;
    }
}
