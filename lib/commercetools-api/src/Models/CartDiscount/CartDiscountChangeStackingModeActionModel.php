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
final class CartDiscountChangeStackingModeActionModel extends JsonObjectModel implements CartDiscountChangeStackingModeAction
{
    public const DISCRIMINATOR_VALUE = 'changeStackingMode';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $stackingMode;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $stackingMode = null
    ) {
        $this->stackingMode = $stackingMode;
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
     * @return null|string
     */
    public function getStackingMode()
    {
        if (is_null($this->stackingMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_STACKING_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->stackingMode = (string) $data;
        }

        return $this->stackingMode;
    }


    /**
     * @param ?string $stackingMode
     */
    public function setStackingMode(?string $stackingMode): void
    {
        $this->stackingMode = $stackingMode;
    }
}
