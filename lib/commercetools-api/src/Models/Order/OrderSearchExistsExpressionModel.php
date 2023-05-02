<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderSearchExistsExpressionModel extends JsonObjectModel implements OrderSearchExistsExpression
{
    /**
     *
     * @var ?OrderSearchQueryExpressionValue
     */
    protected $exists;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?OrderSearchQueryExpressionValue $exists = null
    ) {
        $this->exists = $exists;
    }

    /**
     *
     * @return null|OrderSearchQueryExpressionValue
     */
    public function getExists()
    {
        if (is_null($this->exists)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_EXISTS);
            if (is_null($data)) {
                return null;
            }

            $this->exists = OrderSearchQueryExpressionValueModel::of($data);
        }

        return $this->exists;
    }


    /**
     * @param ?OrderSearchQueryExpressionValue $exists
     */
    public function setExists(?OrderSearchQueryExpressionValue $exists): void
    {
        $this->exists = $exists;
    }
}
