<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\ProductSelection\ProductSelectionResourceIdentifier;
use Commercetools\Api\Models\ProductSelection\ProductSelectionResourceIdentifierModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductSelectionSettingDraftModel extends JsonObjectModel implements ProductSelectionSettingDraft
{
    /**

     * @var ?ProductSelectionResourceIdentifier
     */
    protected $productSelection;

    /**

     * @var ?bool
     */
    protected $active;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductSelectionResourceIdentifier $productSelection = null,
        ?bool $active = null
    ) {
        $this->productSelection = $productSelection;
        $this->active = $active;
    }

    /**
     * <p>Resource Identifier of a ProductSelection.</p>
     *

     * @return null|ProductSelectionResourceIdentifier
     */
    public function getProductSelection()
    {
        if (is_null($this->productSelection)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT_SELECTION);
            if (is_null($data)) {
                return null;
            }

            $this->productSelection = ProductSelectionResourceIdentifierModel::of($data);
        }

        return $this->productSelection;
    }

    /**
     * <p>Set to <code>true</code> if all Products assigned to the Product Selection should become part of the Store's assortment.</p>
     *

     * @return null|bool
     */
    public function getActive()
    {
        if (is_null($this->active)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_ACTIVE);
            if (is_null($data)) {
                return null;
            }
            $this->active = (bool) $data;
        }

        return $this->active;
    }


    /**
     * @param ?ProductSelectionResourceIdentifier $productSelection
     */
    public function setProductSelection(?ProductSelectionResourceIdentifier $productSelection): void
    {
        $this->productSelection = $productSelection;
    }

    /**
     * @param ?bool $active
     */
    public function setActive(?bool $active): void
    {
        $this->active = $active;
    }
}
