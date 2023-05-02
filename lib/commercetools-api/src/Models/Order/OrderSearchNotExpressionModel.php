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
final class OrderSearchNotExpressionModel extends JsonObjectModel implements OrderSearchNotExpression
{
    /**
     *
     * @var ?OrderSearchQueryCollection
     */
    protected $not;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?OrderSearchQueryCollection $not = null
    ) {
        $this->not = $not;
    }

    /**
     *
     * @return null|OrderSearchQueryCollection
     */
    public function getNot()
    {
        if (is_null($this->not)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_NOT);
            if (is_null($data)) {
                return null;
            }
            $this->not = OrderSearchQueryCollection::fromArray($data);
        }

        return $this->not;
    }


    /**
     * @param ?OrderSearchQueryCollection $not
     */
    public function setNot(?OrderSearchQueryCollection $not): void
    {
        $this->not = $not;
    }
}
