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
     * @var ?string
     */
    protected $action;

    /**
     * @var ?ProductSelectionSettingDraftCollection
     */
    protected $productSelections;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductSelectionSettingDraftCollection $productSelections = null
    ) {
        $this->productSelections = $productSelections;
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
     * <p>The total of Product Selections to be set for this Store.</p>
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
