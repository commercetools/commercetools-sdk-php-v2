<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\JsonObjectModel;

final class TaxCategoryChangeNameActionModel extends JsonObjectModel implements TaxCategoryChangeNameAction
{
    const DISCRIMINATOR_VALUE = 'changeName';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $name;

    public function __construct(
        string $name = null
    ) {
        $this->name = $name;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(TaxCategoryUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(TaxCategoryChangeNameAction::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }
}
