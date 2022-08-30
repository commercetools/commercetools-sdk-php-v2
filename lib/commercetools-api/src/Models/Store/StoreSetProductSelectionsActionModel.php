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
final class StoreSetProductSelectionsActionModel extends JsonObjectModel implements StoreSetProductSelectionsAction
{
    public const DISCRIMINATOR_VALUE = 'setProductSelections';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?ProductSelectionSettingDraftCollection
     */
    protected $productSelections;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductSelectionSettingDraftCollection $productSelections = null,
        ?string $action = null
    ) {
        $this->productSelections = $productSelections;
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
     * <p>Value to set.</p>
     * <ul>
     * <li>If provided, Product Selections for which <code>active</code> is set to <code>true</code> are available in the Store.</li>
     * <li>If not provided or provided as empty array, the action removes all Product Selections from this Store, meaning all Products in the <a href="ctp:api:type:Project">Project</a> are available in this Store.</li>
     * </ul>
     *
     *
     * @return null|ProductSelectionSettingDraftCollection
     */
    public function getProductSelections()
    {
        if (is_null($this->productSelections)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_PRODUCT_SELECTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->productSelections = ProductSelectionSettingDraftCollection::fromArray($data);
        }

        return $this->productSelections;
    }


    /**
     * @param ?ProductSelectionSettingDraftCollection $productSelections
     */
    public function setProductSelections(?ProductSelectionSettingDraftCollection $productSelections): void
    {
        $this->productSelections = $productSelections;
    }
}
