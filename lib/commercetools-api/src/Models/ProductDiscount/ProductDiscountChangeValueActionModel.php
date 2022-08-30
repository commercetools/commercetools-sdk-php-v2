<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductDiscountChangeValueActionModel extends JsonObjectModel implements ProductDiscountChangeValueAction
{
    public const DISCRIMINATOR_VALUE = 'changeValue';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?ProductDiscountValueDraft
     */
    protected $value;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductDiscountValueDraft $value = null,
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
     * <p>New value to set. Must not be empty.</p>
     *
     *
     * @return null|ProductDiscountValueDraft
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $className = ProductDiscountValueDraftModel::resolveDiscriminatorClass($data);
            $this->value = $className::of($data);
        }

        return $this->value;
    }


    /**
     * @param ?ProductDiscountValueDraft $value
     */
    public function setValue(?ProductDiscountValueDraft $value): void
    {
        $this->value = $value;
    }
}
