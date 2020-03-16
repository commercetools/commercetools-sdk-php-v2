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
final class CartDiscountChangeValueActionModel extends JsonObjectModel implements CartDiscountChangeValueAction
{
    public const DISCRIMINATOR_VALUE = 'changeValue';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?CartDiscountValueDraft
     */
    protected $value;


    public function __construct(
        CartDiscountValueDraft $value = null
    ) {
        $this->value = $value;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartDiscountUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|CartDiscountValueDraft
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CartDiscountChangeValueAction::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $className = CartDiscountValueDraftModel::resolveDiscriminatorClass($data);
            $this->value = $className::of($data);
        }

        return $this->value;
    }

    public function setValue(?CartDiscountValueDraft $value): void
    {
        $this->value = $value;
    }
}
