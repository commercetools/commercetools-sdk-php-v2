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
final class CartDiscountValueAbsoluteModel extends JsonObjectModel implements CartDiscountValueAbsolute
{
    public const DISCRIMINATOR_VALUE = 'absolute';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?CentPrecisionMoneyCollection
     */
    protected $money;

    /**
     *
     * @var ?string
     */
    protected $applicationMode;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CentPrecisionMoneyCollection $money = null,
        ?string $applicationMode = null,
        ?string $type = null
    ) {
        $this->money = $money;
        $this->applicationMode = $applicationMode;
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
     * <p>Cent precision money values in different currencies.</p>
     *
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
     * <p>Determines how the discount is applied on <a href="ctp:api:type:CartDiscountLineItemsTarget">CartDiscountLineItemTarget</a> and <a href="ctp:api:type:CartDiscountCustomLineItemsTarget">CartDiscountCustomLineItemTarget</a>.</p>
     *
     *
     * @return null|string
     */
    public function getApplicationMode()
    {
        if (is_null($this->applicationMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_APPLICATION_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->applicationMode = (string) $data;
        }

        return $this->applicationMode;
    }


    /**
     * @param ?CentPrecisionMoneyCollection $money
     */
    public function setMoney(?CentPrecisionMoneyCollection $money): void
    {
        $this->money = $money;
    }

    /**
     * @param ?string $applicationMode
     */
    public function setApplicationMode(?string $applicationMode): void
    {
        $this->applicationMode = $applicationMode;
    }
}
