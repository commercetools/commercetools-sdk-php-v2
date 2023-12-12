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
final class ApproverHierarchyDraftModel extends JsonObjectModel implements ApproverHierarchyDraft
{
    /**
     *
     * @var ?ApproverConjunctionDraftCollection
     */
    protected $tiers;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ApproverConjunctionDraftCollection $tiers = null
    ) {
        $this->tiers = $tiers;
    }

    /**
     * <p>Nested conjunctions representing tiers of approvers in a hierarchy.</p>
     *
     *
     * @return null|ApproverConjunctionDraftCollection
     */
    public function getTiers()
    {
        if (is_null($this->tiers)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_TIERS);
            if (is_null($data)) {
                return null;
            }
            $this->tiers = ApproverConjunctionDraftCollection::fromArray($data);
        }

        return $this->tiers;
    }


    /**
     * @param ?ApproverConjunctionDraftCollection $tiers
     */
    public function setTiers(?ApproverConjunctionDraftCollection $tiers): void
    {
        $this->tiers = $tiers;
    }
}
