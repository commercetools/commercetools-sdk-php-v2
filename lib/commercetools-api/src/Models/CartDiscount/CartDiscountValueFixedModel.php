<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Common\TypedMoneyCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CartDiscountValueFixedModel extends JsonObjectModel implements CartDiscountValueFixed
{
    public const DISCRIMINATOR_VALUE = 'fixed';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?TypedMoneyCollection
     */
    protected $money;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?TypedMoneyCollection $money = null,
        ?string $type = null
    ) {
        $this->money = $money;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Money values in <a href="ctp:api:type:CentPrecisionMoney">cent precision</a> or <a href="ctp:api:type:HighPrecisionMoney">high precision</a> of different currencies.</p>
     *
     *
     * @return null|TypedMoneyCollection
     */
    public function getMoney()
    {
        if (is_null($this->money)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_MONEY);
            if (is_null($data)) {
                return null;
            }
            $this->money = TypedMoneyCollection::fromArray($data);
        }

        return $this->money;
    }


    /**
     * @param ?TypedMoneyCollection $money
     */
    public function setMoney(?TypedMoneyCollection $money): void
    {
        $this->money = $money;
    }
}
