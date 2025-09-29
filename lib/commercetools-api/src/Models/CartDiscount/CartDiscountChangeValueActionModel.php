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
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?CartDiscountValueDraft
     */
    protected $value;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CartDiscountValueDraft $value = null,
        ?string $action = null
    ) {
        $this->value = $value;
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
     * <p>When trying to set a <a href="ctp:api:type:CartDiscountValueGiftLineItemDraft">CartDiscountValueGiftLineItemDraft</a> an <a href="ctp:api:type:InvalidInputError">InvalidInput</a> error is returned.</p>
     *
     *
     * @return null|CartDiscountValueDraft
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $className = CartDiscountValueDraftModel::resolveDiscriminatorClass($data);
            $this->value = $className::of($data);
        }

        return $this->value;
    }


    /**
     * @param ?CartDiscountValueDraft $value
     */
    public function setValue(?CartDiscountValueDraft $value): void
    {
        $this->value = $value;
    }
}
