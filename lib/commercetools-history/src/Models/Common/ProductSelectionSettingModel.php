<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductSelectionSettingModel extends JsonObjectModel implements ProductSelectionSetting
{


    /**
     *
     * @var ?Reference
     */
    protected $productSelection;

    /**
     *
     * @var ?bool
     */
    protected $active;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Reference $productSelection = null,
        ?bool $active = null
    ) {
        $this->productSelection = $productSelection;
        $this->active = $active;

    }

    /**
     *
     * @return null|Reference
     */
    public function getProductSelection()
    {
        if (is_null($this->productSelection)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT_SELECTION);
            if (is_null($data)) {
                return null;
            }

            $this->productSelection = ReferenceModel::of($data);
        }

        return $this->productSelection;
    }

    /**
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
     * @param ?Reference $productSelection
     */
    public function setProductSelection(?Reference $productSelection): void
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
