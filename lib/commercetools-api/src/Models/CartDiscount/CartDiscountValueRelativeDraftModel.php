<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CartDiscountValueRelativeDraftModel extends JsonObjectModel implements CartDiscountValueRelativeDraft
{
    public const DISCRIMINATOR_VALUE = 'relative';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?int
     */
    protected $permyriad;

    /**
     *
     * @var ?string
     */
    protected $applicationMode;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $permyriad = null,
        ?string $applicationMode = null,
        ?string $type = null
    ) {
        $this->permyriad = $permyriad;
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
     * <p>Fraction (per ten thousand) the price is reduced by. For example, <code>1000</code> will result in a 10% price reduction.</p>
     *
     *
     * @return null|int
     */
    public function getPermyriad()
    {
        if (is_null($this->permyriad)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_PERMYRIAD);
            if (is_null($data)) {
                return null;
            }
            $this->permyriad = (int) $data;
        }

        return $this->permyriad;
    }

    /**
     * <p>Determines how the discount applies when using <a href="ctp:api:type:CartDiscountPatternTarget">CartDiscountPatternTarget</a>.</p>
     * <ul>
     * <li>If the mode is <code>IndividualApplication</code>, the discounted percentage is applied on each unit's price. The units matching the <code>triggerPattern</code> are not considered.</li>
     * <li>If the mode is <code>ProportionateDistribution</code> and <code>EvenDistribution</code> the discounted value is calculated from the total value of the units matching the <code>targetPattern</code> and distributed among the units matching the <code>targetPattern</code> or <code>triggerPattern</code>. These modes are allowed only if <a href="ctp:api:type:CartDiscountPatternTarget">CartDiscountPatternTarget</a> <code>triggerPattern</code> is non-empty.</li>
     * </ul>
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
     * @param ?int $permyriad
     */
    public function setPermyriad(?int $permyriad): void
    {
        $this->permyriad = $permyriad;
    }

    /**
     * @param ?string $applicationMode
     */
    public function setApplicationMode(?string $applicationMode): void
    {
        $this->applicationMode = $applicationMode;
    }
}
