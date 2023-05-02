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
final class OrderSearchWildCardExpressionModel extends JsonObjectModel implements OrderSearchWildCardExpression
{
    /**
     *
     * @var ?OrderSearchStringValue
     */
    protected $wildcard;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?OrderSearchStringValue $wildcard = null
    ) {
        $this->wildcard = $wildcard;
    }

    /**
     *
     * @return null|OrderSearchStringValue
     */
    public function getWildcard()
    {
        if (is_null($this->wildcard)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_WILDCARD);
            if (is_null($data)) {
                return null;
            }

            $this->wildcard = OrderSearchStringValueModel::of($data);
        }

        return $this->wildcard;
    }


    /**
     * @param ?OrderSearchStringValue $wildcard
     */
    public function setWildcard(?OrderSearchStringValue $wildcard): void
    {
        $this->wildcard = $wildcard;
    }
}
