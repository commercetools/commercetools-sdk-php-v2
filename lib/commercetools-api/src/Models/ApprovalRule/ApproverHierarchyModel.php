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
final class ApproverHierarchyModel extends JsonObjectModel implements ApproverHierarchy
{
    /**
     *
     * @var ?ApproverConjunctionCollection
     */
    protected $tiers;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ApproverConjunctionCollection $tiers = null
    ) {
        $this->tiers = $tiers;
    }

    /**
     * <p>All of the nested conjunctions must be approved in order for the hierarchy to be considered approved.</p>
     *
     *
     * @return null|ApproverConjunctionCollection
     */
    public function getTiers()
    {
        if (is_null($this->tiers)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_TIERS);
            if (is_null($data)) {
                return null;
            }
            $this->tiers = ApproverConjunctionCollection::fromArray($data);
        }

        return $this->tiers;
    }


    /**
     * @param ?ApproverConjunctionCollection $tiers
     */
    public function setTiers(?ApproverConjunctionCollection $tiers): void
    {
        $this->tiers = $tiers;
    }
}
