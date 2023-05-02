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
final class OrderSearchOrExpressionModel extends JsonObjectModel implements OrderSearchOrExpression
{
    /**
     *
     * @var ?OrderSearchQueryCollection
     */
    protected $or;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?OrderSearchQueryCollection $or = null
    ) {
        $this->or = $or;
    }

    /**
     *
     * @return null|OrderSearchQueryCollection
     */
    public function getOr()
    {
        if (is_null($this->or)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_OR);
            if (is_null($data)) {
                return null;
            }
            $this->or = OrderSearchQueryCollection::fromArray($data);
        }

        return $this->or;
    }


    /**
     * @param ?OrderSearchQueryCollection $or
     */
    public function setOr(?OrderSearchQueryCollection $or): void
    {
        $this->or = $or;
    }
}
