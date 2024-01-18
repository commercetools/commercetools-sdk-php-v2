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
final class ProductSearchNotExpressionModel extends JsonObjectModel implements ProductSearchNotExpression
{
    /**
     *
     * @var ?ProductSearchQueryCollection
     */
    protected $not;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductSearchQueryCollection $not = null
    ) {
        $this->not = $not;
    }

    /**
     *
     * @return null|ProductSearchQueryCollection
     */
    public function getNot()
    {
        if (is_null($this->not)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_NOT);
            if (is_null($data)) {
                return null;
            }
            $this->not = ProductSearchQueryCollection::fromArray($data);
        }

        return $this->not;
    }


    /**
     * @param ?ProductSearchQueryCollection $not
     */
    public function setNot(?ProductSearchQueryCollection $not): void
    {
        $this->not = $not;
    }
}
