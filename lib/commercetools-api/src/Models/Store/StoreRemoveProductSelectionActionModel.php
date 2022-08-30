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
final class StoreRemoveProductSelectionActionModel extends JsonObjectModel implements StoreRemoveProductSelectionAction
{
    public const DISCRIMINATOR_VALUE = 'removeProductSelection';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?ProductSelectionResourceIdentifier
     */
    protected $productSelection;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductSelectionResourceIdentifier $productSelection = null,
        ?string $action = null
    ) {
        $this->productSelection = $productSelection;
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
     * <p>Value to remove. The removed Product Selection is made offline.</p>
     *
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
     * @param ?ProductSelectionResourceIdentifier $productSelection
     */
    public function setProductSelection(?ProductSelectionResourceIdentifier $productSelection): void
    {
        $this->productSelection = $productSelection;
    }
}
