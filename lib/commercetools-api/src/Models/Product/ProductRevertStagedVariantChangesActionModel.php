<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class ProductRevertStagedVariantChangesActionModel extends JsonObjectModel implements ProductRevertStagedVariantChangesAction
{
    public const DISCRIMINATOR_VALUE = 'revertStagedVariantChanges';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?int
     */
    protected $variantId;


    public function __construct(
        int $variantId = null
    ) {
        $this->variantId = $variantId;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|int
     */
    public function getVariantId()
    {
        if (is_null($this->variantId)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ProductRevertStagedVariantChangesAction::FIELD_VARIANT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->variantId = (int) $data;
        }

        return $this->variantId;
    }

    public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }



}
