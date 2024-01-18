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
final class ProductSearchExistsExpressionModel extends JsonObjectModel implements ProductSearchExistsExpression
{
    /**
     *
     * @var ?ProductSearchExistsValue
     */
    protected $exists;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductSearchExistsValue $exists = null
    ) {
        $this->exists = $exists;
    }

    /**
     *
     * @return null|ProductSearchExistsValue
     */
    public function getExists()
    {
        if (is_null($this->exists)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_EXISTS);
            if (is_null($data)) {
                return null;
            }

            $this->exists = ProductSearchExistsValueModel::of($data);
        }

        return $this->exists;
    }


    /**
     * @param ?ProductSearchExistsValue $exists
     */
    public function setExists(?ProductSearchExistsValue $exists): void
    {
        $this->exists = $exists;
    }
}
