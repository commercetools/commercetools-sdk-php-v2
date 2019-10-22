<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ProductDiscountChangeValueActionModel extends JsonObjectModel implements ProductDiscountChangeValueAction
{
    const DISCRIMINATOR_VALUE = 'changeValue';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?ProductDiscountValueDraft
     */
    protected $value;

    public function __construct(
        string $action = null,
        ProductDiscountValueDraft $value = null
    ) {
        $this->action = $action;
        $this->value = $value;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductDiscountUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|ProductDiscountValueDraft
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductDiscountChangeValueAction::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $className = ProductDiscountValueDraftModel::resolveDiscriminatorClass($data);
            $this->value = $className::of($data);
        }

        return $this->value;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setValue(?ProductDiscountValueDraft $value): void
    {
        $this->value = $value;
    }
}
