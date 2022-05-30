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
     * @var ?string
     */
    protected $action;

    /**
     * @var ?CartDiscountTarget
     */
    protected $target;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CartDiscountTarget $target = null
    ) {
        $this->target = $target;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
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
