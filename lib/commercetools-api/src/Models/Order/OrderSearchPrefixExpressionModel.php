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
final class OrderSearchPrefixExpressionModel extends JsonObjectModel implements OrderSearchPrefixExpression
{
    /**
     *
     * @var ?OrderSearchStringValue
     */
    protected $prefix;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?OrderSearchStringValue $prefix = null
    ) {
        $this->prefix = $prefix;
    }

    /**
     *
     * @return null|OrderSearchStringValue
     */
    public function getPrefix()
    {
        if (is_null($this->prefix)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PREFIX);
            if (is_null($data)) {
                return null;
            }

            $this->prefix = OrderSearchStringValueModel::of($data);
        }

        return $this->prefix;
    }


    /**
     * @param ?OrderSearchStringValue $prefix
     */
    public function setPrefix(?OrderSearchStringValue $prefix): void
    {
        $this->prefix = $prefix;
    }
}
