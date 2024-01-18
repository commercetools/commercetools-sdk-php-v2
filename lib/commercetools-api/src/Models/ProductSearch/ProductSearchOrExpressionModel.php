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
final class ProductSearchOrExpressionModel extends JsonObjectModel implements ProductSearchOrExpression
{
    /**
     *
     * @var ?ProductSearchQueryCollection
     */
    protected $or;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductSearchQueryCollection $or = null
    ) {
        $this->or = $or;
    }

    /**
     *
     * @return null|ProductSearchQueryCollection
     */
    public function getOr()
    {
        if (is_null($this->or)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_OR);
            if (is_null($data)) {
                return null;
            }
            $this->or = ProductSearchQueryCollection::fromArray($data);
        }

        return $this->or;
    }


    /**
     * @param ?ProductSearchQueryCollection $or
     */
    public function setOr(?ProductSearchQueryCollection $or): void
    {
        $this->or = $or;
    }
}
