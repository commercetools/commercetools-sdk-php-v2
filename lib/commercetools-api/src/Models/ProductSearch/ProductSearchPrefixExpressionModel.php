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
final class ProductSearchPrefixExpressionModel extends JsonObjectModel implements ProductSearchPrefixExpression
{
    /**
     *
     * @var ?ProductSearchAnyValue
     */
    protected $prefix;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductSearchAnyValue $prefix = null
    ) {
        $this->prefix = $prefix;
    }

    /**
     *
     * @return null|ProductSearchAnyValue
     */
    public function getPrefix()
    {
        if (is_null($this->prefix)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PREFIX);
            if (is_null($data)) {
                return null;
            }

            $this->prefix = ProductSearchAnyValueModel::of($data);
        }

        return $this->prefix;
    }


    /**
     * @param ?ProductSearchAnyValue $prefix
     */
    public function setPrefix(?ProductSearchAnyValue $prefix): void
    {
        $this->prefix = $prefix;
    }
}
