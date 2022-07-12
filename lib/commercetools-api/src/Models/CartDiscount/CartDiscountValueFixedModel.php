<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Common\CentPrecisionMoneyCollection;
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

     * @var ?string
     */
    protected $type;

    /**

     * @var ?CentPrecisionMoneyCollection
     */
    protected $money;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CentPrecisionMoneyCollection $money = null
    ) {
        $this->money = $money;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**

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
     * <p>Cent precision money values in different currencies.</p>
     *

     * @return null|CentPrecisionMoneyCollection
     */
    public function getMoney()
    {
        if (is_null($this->money)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_MONEY);
            if (is_null($data)) {
                return null;
            }
            $this->money = CentPrecisionMoneyCollection::fromArray($data);
        }

        return $this->money;
    }


    /**
     * @param ?CentPrecisionMoneyCollection $money
     */
    public function setMoney(?CentPrecisionMoneyCollection $money): void
    {
        $this->money = $money;
    }
}
