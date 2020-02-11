<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class CartRecalculateActionModel extends JsonObjectModel implements CartRecalculateAction
{
    public const DISCRIMINATOR_VALUE = 'recalculate';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?bool
     */
    protected $updateProductData;


    public function __construct(
        bool $updateProductData = null
    ) {
        $this->updateProductData = $updateProductData;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>If set to <code>true</code>, the line item product data (<code>name</code>, <code>variant</code> and <code>productType</code>) will also be updated.
     * If set to <code>false</code>,
     * only the prices and tax rates of the line item will be updated.
     * The updated price of a line item may not correspond to a price in <code>variant.prices</code> anymore.</p>
     *
     * @return null|bool
     */
    public function getUpdateProductData()
    {
        if (is_null($this->updateProductData)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(CartRecalculateAction::FIELD_UPDATE_PRODUCT_DATA);
            if (is_null($data)) {
                return null;
            }
            $this->updateProductData = (bool) $data;
        }

        return $this->updateProductData;
    }

    public function setUpdateProductData(?bool $updateProductData): void
    {
        $this->updateProductData = $updateProductData;
    }



}
