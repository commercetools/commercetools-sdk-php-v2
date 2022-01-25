<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StoreAddProductSelectionActionModel extends JsonObjectModel implements StoreAddProductSelectionAction
{
    public const DISCRIMINATOR_VALUE = 'addProductSelection';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?ProductSelectionSettingDraft
     */
    protected $productSelection;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductSelectionSettingDraft $productSelection = null
    ) {
        $this->productSelection = $productSelection;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
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
     * <p>A Product Selection to be added to the current Product Selections of this Store.</p>
     *
     * @return null|ProductSelectionSettingDraft
     */
    public function getProductSelection()
    {
        if (is_null($this->productSelection)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT_SELECTION);
            if (is_null($data)) {
                return null;
            }

            $this->productSelection = ProductSelectionSettingDraftModel::of($data);
        }

        return $this->productSelection;
    }


    /**
     * @param ?ProductSelectionSettingDraft $productSelection
     */
    public function setProductSelection(?ProductSelectionSettingDraft $productSelection): void
    {
        $this->productSelection = $productSelection;
    }
}
