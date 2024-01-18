<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductSearchAndExpressionModel extends JsonObjectModel implements ProductSearchAndExpression
{
    /**
     *
     * @var ?ProductSearchQueryCollection
     */
    protected $and;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductSearchQueryCollection $and = null
    ) {
        $this->and = $and;
    }

    /**
     *
     * @return null|ProductSearchQueryCollection
     */
    public function getAnd()
    {
        if (is_null($this->and)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_AND);
            if (is_null($data)) {
                return null;
            }
            $this->and = ProductSearchQueryCollection::fromArray($data);
        }

        return $this->and;
    }


    /**
     * @param ?ProductSearchQueryCollection $and
     */
    public function setAnd(?ProductSearchQueryCollection $and): void
    {
        $this->and = $and;
    }
}
