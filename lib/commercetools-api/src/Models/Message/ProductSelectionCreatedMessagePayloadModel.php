<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\ProductSelection\ProductSelectionType;
use Commercetools\Api\Models\ProductSelection\ProductSelectionTypeModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductSelectionCreatedMessagePayloadModel extends JsonObjectModel implements ProductSelectionCreatedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ProductSelectionCreated';
    /**

     * @var ?string
     */
    protected $type;

    /**

     * @var ?ProductSelectionType
     */
    protected $productSelection;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductSelectionType $productSelection = null
    ) {
        $this->productSelection = $productSelection;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**

     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**

     * @return null|ProductSelectionType
     */
    public function getProductSelection()
    {
        if (is_null($this->productSelection)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT_SELECTION);
            if (is_null($data)) {
                return null;
            }
            $className = ProductSelectionTypeModel::resolveDiscriminatorClass($data);
            $this->productSelection = $className::of($data);
        }

        return $this->productSelection;
    }


    /**
     * @param ?ProductSelectionType $productSelection
     */
    public function setProductSelection(?ProductSelectionType $productSelection): void
    {
        $this->productSelection = $productSelection;
    }
}
