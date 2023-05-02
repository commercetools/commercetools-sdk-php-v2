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
final class OrderSearchAndExpressionModel extends JsonObjectModel implements OrderSearchAndExpression
{
    /**
     *
     * @var ?OrderSearchQueryCollection
     */
    protected $and;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?OrderSearchQueryCollection $and = null
    ) {
        $this->and = $and;
    }

    /**
     *
     * @return null|OrderSearchQueryCollection
     */
    public function getAnd()
    {
        if (is_null($this->and)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_AND);
            if (is_null($data)) {
                return null;
            }
            $this->and = OrderSearchQueryCollection::fromArray($data);
        }

        return $this->and;
    }


    /**
     * @param ?OrderSearchQueryCollection $and
     */
    public function setAnd(?OrderSearchQueryCollection $and): void
    {
        $this->and = $and;
    }
}
