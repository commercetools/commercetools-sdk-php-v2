<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Common\MoneyCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CartDiscountValueAbsoluteDraftModel extends JsonObjectModel implements CartDiscountValueAbsoluteDraft
{
    public const DISCRIMINATOR_VALUE = 'absolute';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?MoneyCollection
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
        ?MoneyCollection $money = null,
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
     * <p>Money values in different currencies.
     * An absolute Cart Discount will match a price only if the array contains a value with the same currency. For example, if it contains 10€ and 15$, the matching € price will be decreased by 10€ and the matching $ price will be decreased by 15$.</p>
     * <p>If the array is empty or has multiple values of the same currency, the API returns an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error.</p>
     *
     *
     * @return null|MoneyCollection
     */
    public function getMoney()
    {
        if (is_null($this->money)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_MONEY);
            if (is_null($data)) {
                return null;
            }
            $this->money = MoneyCollection::fromArray($data);
        }

        return $this->money;
    }

    /**
     * <p>Determines how the discount applies on <a href="ctp:api:type:CartDiscountLineItemsTarget">CartDiscountLineItemTarget</a> and <a href="ctp:api:type:CartDiscountCustomLineItemsTarget">CartDiscountCustomLineItemTarget</a>.</p>
     * <p>If not set, the default behavior is <code>ProportionateDistribution</code>.</p>
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
     * @param ?MoneyCollection $money
     */
    public function setMoney(?MoneyCollection $money): void
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
