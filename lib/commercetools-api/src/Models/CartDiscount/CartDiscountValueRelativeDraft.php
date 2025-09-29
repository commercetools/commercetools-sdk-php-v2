<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartDiscountValueRelativeDraft extends CartDiscountValueDraft
{
    public const FIELD_PERMYRIAD = 'permyriad';
    public const FIELD_APPLICATION_MODE = 'applicationMode';

    /**
     * <p>Fraction (per ten thousand) the price is reduced by. For example, <code>1000</code> will result in a 10% price reduction.</p>
     *

     * @return null|int
     */
    public function getPermyriad();

    /**
     * <p>Determines how the discount applies when using <a href="ctp:api:type:CartDiscountPatternTarget">CartDiscountPatternTarget</a>.</p>
     * <ul>
     * <li>If the mode is <code>IndividualApplication</code>, the discounted percentage is applied on each unit's price. The units matching the <code>triggerPattern</code> are not considered.</li>
     * <li>If the mode is <code>ProportionateDistribution</code> and <code>EvenDistribution</code> the discounted value is calculated from the total value of the units matching the <code>targetPattern</code> and distributed among the units matching the <code>targetPattern</code> or <code>triggerPattern</code>. These modes are allowed only if <a href="ctp:api:type:CartDiscountPatternTarget">CartDiscountPatternTarget</a> <code>triggerPattern</code> is non-empty.</li>
     * </ul>
     *

     * @return null|string
     */
    public function getApplicationMode();

    /**
     * @param ?int $permyriad
     */
    public function setPermyriad(?int $permyriad): void;

    /**
     * @param ?string $applicationMode
     */
    public function setApplicationMode(?string $applicationMode): void;
}
