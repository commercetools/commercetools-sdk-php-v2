<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Api\Models\Common\CentPrecisionMoneyDraftCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductDiscountValueAbsoluteDraftModel extends JsonObjectModel implements ProductDiscountValueAbsoluteDraft
{
    public const DISCRIMINATOR_VALUE = 'absolute';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?CentPrecisionMoneyDraftCollection
     */
    protected $money;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CentPrecisionMoneyDraftCollection $money = null
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
     * <p>Money values in different currencies. An absolute <a href="ctp:api:type:ProductDiscount">ProductDiscount</a> will only match a price if this array contains a value with the same currency. For example, if it contains 10€ and 15$, the matching € price will be decreased by 10€ and the matching $ price will be decreased by 15$.</p>
     *
     * @return null|CentPrecisionMoneyDraftCollection
     */
    public function getMoney()
    {
        if (is_null($this->money)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_MONEY);
            if (is_null($data)) {
                return null;
            }
            $this->money = CentPrecisionMoneyDraftCollection::fromArray($data);
        }

        return $this->money;
    }


    /**
     * @param ?CentPrecisionMoneyDraftCollection $money
     */
    public function setMoney(?CentPrecisionMoneyDraftCollection $money): void
    {
        $this->money = $money;
    }
}
