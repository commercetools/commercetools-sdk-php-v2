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
final class ApproverConjunctionModel extends JsonObjectModel implements ApproverConjunction
{
    /**
     *
     * @var ?ApproverDisjunctionCollection
     */
    protected $and;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ApproverDisjunctionCollection $and = null
    ) {
        $this->and = $and;
    }

    /**
     * <p>All of the nested disjunctions must be approved in order for the conjunction to be considered approved.</p>
     *
     *
     * @return null|ApproverDisjunctionCollection
     */
    public function getAnd()
    {
        if (is_null($this->and)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_AND);
            if (is_null($data)) {
                return null;
            }
            $this->and = ApproverDisjunctionCollection::fromArray($data);
        }

        return $this->and;
    }


    /**
     * @param ?ApproverDisjunctionCollection $and
     */
    public function setAnd(?ApproverDisjunctionCollection $and): void
    {
        $this->and = $and;
    }
}
