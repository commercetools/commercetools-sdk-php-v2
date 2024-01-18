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
final class ProductSearchWildCardExpressionModel extends JsonObjectModel implements ProductSearchWildCardExpression
{
    /**
     *
     * @var ?ProductSearchAnyValue
     */
    protected $wildcard;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductSearchAnyValue $wildcard = null
    ) {
        $this->wildcard = $wildcard;
    }

    /**
     *
     * @return null|ProductSearchAnyValue
     */
    public function getWildcard()
    {
        if (is_null($this->wildcard)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_WILDCARD);
            if (is_null($data)) {
                return null;
            }

            $this->wildcard = ProductSearchAnyValueModel::of($data);
        }

        return $this->wildcard;
    }


    /**
     * @param ?ProductSearchAnyValue $wildcard
     */
    public function setWildcard(?ProductSearchAnyValue $wildcard): void
    {
        $this->wildcard = $wildcard;
    }
}
