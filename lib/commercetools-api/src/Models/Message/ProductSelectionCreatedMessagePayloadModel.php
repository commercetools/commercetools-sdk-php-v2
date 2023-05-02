<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\ProductSelection\ProductSelection;
use Commercetools\Api\Models\ProductSelection\ProductSelectionModel;
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
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?ProductSelection
     */
    protected $productSelection;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductSelection $productSelection = null,
        ?string $type = null
    ) {
        $this->productSelection = $productSelection;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
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
     * <p><a href="ctp:api:type:ProductSelection">Product Selection</a> that was created.</p>
     *
     *
     * @return null|ProductSelection
     */
    public function getProductSelection()
    {
        if (is_null($this->productSelection)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT_SELECTION);
            if (is_null($data)) {
                return null;
            }

            $this->productSelection = ProductSelectionModel::of($data);
        }

        return $this->productSelection;
    }


    /**
     * @param ?ProductSelection $productSelection
     */
    public function setProductSelection(?ProductSelection $productSelection): void
    {
        $this->productSelection = $productSelection;
    }
}
