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
final class CartDiscountChangeTargetActionModel extends JsonObjectModel implements CartDiscountChangeTargetAction
{
    public const DISCRIMINATOR_VALUE = 'changeTarget';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?CartDiscountTarget
     */
    protected $target;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CartDiscountTarget $target = null,
        ?string $action = null
    ) {
        $this->target = $target;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>New value to set.</p>
     * <p>For a <a href="ctp:api:type:CartDiscountValueRelative">CartDiscountValueRelative</a>, if <code>applicationMode</code> is set, the target must be <a href="ctp:api:type:CartDiscountPatternTarget">CartDiscountPatternTarget</a>.
     * If <code>applicationMode</code> is <code>ProportionateDistribution</code> or <code>EvenDistribution</code>, the <a href="ctp:api:type:CartDiscountPatternTarget">CartDiscountPatternTarget</a> <code>triggerPattern</code> must be non-empty.
     * If either conditions are not met, an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error is returned.</p>
     *
     *
     * @return null|CartDiscountTarget
     */
    public function getTarget()
    {
        if (is_null($this->target)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TARGET);
            if (is_null($data)) {
                return null;
            }
            $className = CartDiscountTargetModel::resolveDiscriminatorClass($data);
            $this->target = $className::of($data);
        }

        return $this->target;
    }


    /**
     * @param ?CartDiscountTarget $target
     */
    public function setTarget(?CartDiscountTarget $target): void
    {
        $this->target = $target;
    }
}
