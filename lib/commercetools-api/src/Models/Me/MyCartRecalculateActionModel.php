<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class MyCartRecalculateActionModel extends JsonObjectModel implements MyCartRecalculateAction
{
    public const DISCRIMINATOR_VALUE = 'recalculate';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?bool
     */
    protected $updateProductData;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?bool $updateProductData = null,
        ?string $action = null
    ) {
        $this->updateProductData = $updateProductData;
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
     *
     * @return null|bool
     */
    public function getUpdateProductData()
    {
        if (is_null($this->updateProductData)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_UPDATE_PRODUCT_DATA);
            if (is_null($data)) {
                return null;
            }
            $this->updateProductData = (bool) $data;
        }

        return $this->updateProductData;
    }


    /**
     * @param ?bool $updateProductData
     */
    public function setUpdateProductData(?bool $updateProductData): void
    {
        $this->updateProductData = $updateProductData;
    }
}
